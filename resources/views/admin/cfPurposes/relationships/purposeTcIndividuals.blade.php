@can('tc_individual_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.tc-individuals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.tcIndividual.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.tcIndividual.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-purposeTcIndividuals">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.purpose') }}
                        </th>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tcIndividuals as $key => $tcIndividual)
                        <tr data-entry-id="{{ $tcIndividual->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $tcIndividual->id ?? '' }}
                            </td>
                            <td>
                                {{ $tcIndividual->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $tcIndividual->amount ?? '' }}
                            </td>
                            <td>
                                {{ $tcIndividual->date ?? '' }}
                            </td>
                            <td>
                                {{ $tcIndividual->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $tcIndividual->purpose->purpose_name ?? '' }}
                            </td>
                            <td>
                                {{ $tcIndividual->note ?? '' }}
                            </td>
                            <td>
                                @can('tc_individual_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.tc-individuals.show', $tcIndividual->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('tc_individual_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.tc-individuals.edit', $tcIndividual->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('tc_individual_delete')
                                    <form action="{{ route('admin.tc-individuals.destroy', $tcIndividual->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('tc_individual_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.tc-individuals.massDestroy') }}",
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
  let table = $('.datatable-purposeTcIndividuals:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection