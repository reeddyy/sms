@can('payments_individual_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.payments-individuals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.paymentsIndividual.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.paymentsIndividual.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-memberNoPaymentsIndividuals">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.payment_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.membership') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.member_valid_till') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paymentsIndividuals as $key => $paymentsIndividual)
                        <tr data-entry-id="{{ $paymentsIndividual->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $paymentsIndividual->id ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsIndividual->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsIndividual->payment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsIndividual->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsIndividual->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\PaymentsIndividual::MEMBERSHIP_RADIO[$paymentsIndividual->membership] ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsIndividual->member_valid_till ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsIndividual->note ?? '' }}
                            </td>
                            <td>
                                @can('payments_individual_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.payments-individuals.show', $paymentsIndividual->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('payments_individual_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.payments-individuals.edit', $paymentsIndividual->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('payments_individual_delete')
                                    <form action="{{ route('admin.payments-individuals.destroy', $paymentsIndividual->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('payments_individual_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.payments-individuals.massDestroy') }}",
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
  let table = $('.datatable-memberNoPaymentsIndividuals:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection