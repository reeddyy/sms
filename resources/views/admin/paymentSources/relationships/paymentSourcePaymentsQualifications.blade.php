@can('payments_qualification_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.payments-qualifications.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.paymentsQualification.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.paymentsQualification.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-paymentSourcePaymentsQualifications">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.enrolment_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.payment_source') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.payment_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.instalment_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paymentsQualifications as $key => $paymentsQualification)
                        <tr data-entry-id="{{ $paymentsQualification->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $paymentsQualification->id ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->enrolment_no->enrolment_no ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->payment_source->payment_source_name ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->payment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->instalment_no ?? '' }}
                            </td>
                            <td>
                                {{ $paymentsQualification->note ?? '' }}
                            </td>
                            <td>
                                @can('payments_qualification_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.payments-qualifications.show', $paymentsQualification->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('payments_qualification_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.payments-qualifications.edit', $paymentsQualification->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('payments_qualification_delete')
                                    <form action="{{ route('admin.payments-qualifications.destroy', $paymentsQualification->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('payments_qualification_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.payments-qualifications.massDestroy') }}",
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
  let table = $('.datatable-paymentSourcePaymentsQualifications:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection