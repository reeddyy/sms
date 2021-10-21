@can('training_credits_corporate_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.training-credits-corporates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.trainingCreditsCorporate.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.trainingCreditsCorporate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-memberNoTrainingCreditsCorporates">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.purpose') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainingCreditsCorporates as $key => $trainingCreditsCorporate)
                        <tr data-entry-id="{{ $trainingCreditsCorporate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->id ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->amount ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->date ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->purpose->purpose_name ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCreditsCorporate->note ?? '' }}
                            </td>
                            <td>
                                @can('training_credits_corporate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.training-credits-corporates.show', $trainingCreditsCorporate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('training_credits_corporate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.training-credits-corporates.edit', $trainingCreditsCorporate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('training_credits_corporate_delete')
                                    <form action="{{ route('admin.training-credits-corporates.destroy', $trainingCreditsCorporate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('training_credits_corporate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.training-credits-corporates.massDestroy') }}",
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
  let table = $('.datatable-memberNoTrainingCreditsCorporates:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection