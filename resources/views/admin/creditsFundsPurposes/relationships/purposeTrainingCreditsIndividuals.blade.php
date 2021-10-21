@can('training_credits_individual_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.training-credits-individuals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.trainingCreditsIndividual.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.trainingCreditsIndividual.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-purposeTrainingCreditsIndividuals">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.purpose') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainingCreditsIndividuals as $key => $trainingCreditsIndividual)
                        <tr data-entry-id="{{ $trainingCreditsIndividual->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->id ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->amount ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->date ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->purpose->purpose_name ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsIndividual->note ?? '' }}
                            </td>
                            <td>
                                @can('training_credits_individual_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.training-credits-individuals.show', $trainingCreditsIndividual->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('training_credits_individual_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.training-credits-individuals.edit', $trainingCreditsIndividual->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('training_credits_individual_delete')
                                    <form action="{{ route('admin.training-credits-individuals.destroy', $trainingCreditsIndividual->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('training_credits_individual_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.training-credits-individuals.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-purposeTrainingCreditsIndividuals:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection