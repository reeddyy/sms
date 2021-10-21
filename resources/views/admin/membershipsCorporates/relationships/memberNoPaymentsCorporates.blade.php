@can('payments_corporate_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.payments-corporates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.paymentsCorporate.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.paymentsCorporate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-memberNoPaymentsCorporates">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.member_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.payment_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.membership') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.member_valid_till') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paymentsCorporates as $key => $paymentsCorporate)
                        <tr data-entry-id="{{ $paymentsCorporate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $paymentsCorporate->id ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsCorporate->member_no->member_no ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsCorporate->payment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsCorporate->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsCorporate->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\PaymentsCorporate::MEMBERSHIP_RADIO[$paymentsCorporate->membership] ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsCorporate->member_valid_till ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsCorporate->note ?? '' }}
                            </td>
                            <td>
                                @can('payments_corporate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.payments-corporates.show', $paymentsCorporate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('payments_corporate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.payments-corporates.edit', $paymentsCorporate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('payments_corporate_delete')
                                    <form action="{{ route('admin.payments-corporates.destroy', $paymentsCorporate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('payments_corporate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.payments-corporates.massDestroy') }}",
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
  let table = $('.datatable-memberNoPaymentsCorporates:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection