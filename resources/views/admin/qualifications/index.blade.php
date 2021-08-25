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
                            {{ trans('cruds.individual.fields.nric_fin') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.email_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.course_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_total_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.m_el_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.examination_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.registration_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.instalment_fee_1st') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.instalment_fee_2nd') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.instalment_fee_3rd') }}
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
                            {{ trans('cruds.qualification.fields.payment_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.receipt_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.payment_note') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.amount_paid') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.outstanding_balance') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.results_release_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_1_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.module.fields.module_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_1_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.grade.fields.grade_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_2_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_2_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_3_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_3_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_4_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_4_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_5_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_5_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_6_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.module_6_grade') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.transcript_1_release_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualification.fields.transcript_2_release_date') }}
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
                                {{ $qualification->student_name->nric_fin ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->student_name->email_address ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->course_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->course_total_fee ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->course_fee ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->m_el_fee ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->examination_fee ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->registration_fee ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->instalment_fee_1st ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->instalment_fee_2nd ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->course_name->instalment_fee_3rd ?? '' }}
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
                                {{ $qualification->payment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->receipt_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->payment_note ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->amount_paid ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->outstanding_balance ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->results_release_date ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_1_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_1_name->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_1_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_1_grade->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_2_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_2_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_3_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_3_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_4_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_4_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_5_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_5_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_6_name->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->module_6_grade->grade ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->transcript_1_release_date ?? '' }}
                            </td>
                            <td>
                                {{ $qualification->transcript_2_release_date ?? '' }}
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