@can('sf_individual_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.sf-individuals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.sfIndividual.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.sfIndividual.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-fundNameSfIndividuals">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.fund_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.purpose') }}
                        </th>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sfIndividuals as $key => $sfIndividual)
                        <tr data-entry-id="{{ $sfIndividual->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $sfIndividual->id ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->fund_name->fund_name ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->amount ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->date ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->purpose->purpose_name ?? '' }}
                            </td>
                            <td>
                                {{ $sfIndividual->note ?? '' }}
                            </td>
                            <td>
                                @can('sf_individual_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sf-individuals.show', $sfIndividual->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('sf_individual_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.sf-individuals.edit', $sfIndividual->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('sf_individual_delete')
                                    <form action="{{ route('admin.sf-individuals.destroy', $sfIndividual->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('sf_individual_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sf-individuals.massDestroy') }}",
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
  let table = $('.datatable-fundNameSfIndividuals:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection