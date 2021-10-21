@can('support_funds_individual_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.support-funds-individuals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.supportFundsIndividual.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.supportFundsIndividual.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-purposeSupportFundsIndividuals">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.fund_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.purpose') }}
                        </th>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($supportFundsIndividuals as $key => $supportFundsIndividual)
                        <tr data-entry-id="{{ $supportFundsIndividual->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $supportFundsIndividual->id ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->fund_name->fund_name ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->amount ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->date ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->purpose->purpose_name ?? '' }}
                            </td>
                            <td>
                                {{ $supportFundsIndividual->note ?? '' }}
                            </td>
                            <td>
                                @can('support_funds_individual_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.support-funds-individuals.show', $supportFundsIndividual->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('support_funds_individual_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.support-funds-individuals.edit', $supportFundsIndividual->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('support_funds_individual_delete')
                                    <form action="{{ route('admin.support-funds-individuals.destroy', $supportFundsIndividual->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('support_funds_individual_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.support-funds-individuals.massDestroy') }}",
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
  let table = $('.datatable-purposeSupportFundsIndividuals:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection