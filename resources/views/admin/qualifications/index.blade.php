@extends('layouts.admin')
@section('content')
@can('qualification_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.qualifications.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.qualification.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.qualification.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Qualification">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.student_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.course_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.course_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.course_end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.enrolment_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.company_sponsored') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.company_address_line_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.company_address_line_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_in_charge_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_email_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_claim_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_claim_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_receipt_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.waive_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.tc_utilised_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.instalment_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.receipt_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($qualifications as $key => $qualification)
                        <tr data-entry-id="{{ $qualification->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $qualification->id ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->student_name->name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->course_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_end_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Qualification::ENROLMENT_STATUS_RADIO[$qualification->enrolment_status] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Qualification::COMPANY_SPONSORED_RADIO[$qualification->company_sponsored] ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->company_address_line_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->company_address_line_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->country ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->officer_in_charge_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->officer_designation ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->officer_contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->officer_email_address ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->ssg_claim_amount ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->ssg_claim_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->ssg_payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->ssg_receipt_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->waive_amount ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->tc_utilised_amount ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->instalment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->receipt_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->note ?? '' }}
                            </td>
                            <td>
                                @can('qualification_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.qualifications.show', $qualification->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('qualification_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.qualifications.edit', $qualification->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('qualification_delete')
                                    <form action="{{ route('admin.qualifications.destroy', $qualification->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('qualification_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.qualifications.massDestroy') }}",
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
  let table = $('.datatable-Qualification:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection