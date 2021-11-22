@can('enrolments_qualification_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.enrolments-qualifications.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.enrolmentsQualification.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.enrolmentsQualification.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-officerNameEnrolmentsQualifications">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.app_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.course_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.classes') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.enrolment_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.student_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.company_sponsored') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.officer_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.total_fees') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.amount_paid') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.outstanding_balance') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrolmentsQualifications as $key => $enrolmentsQualification)
                        <tr data-entry-id="{{ $enrolmentsQualification->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $enrolmentsQualification->id ?? '' }}
                            </td>
                            <td>
                                @foreach($enrolmentsQualification->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $enrolmentsQualification->app_no->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->course_title->course_title ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->end_date ?? '' }}
                            </td>
                            <td>
                                @foreach($enrolmentsQualification->classes as $key => $item)
                                    <span class="badge badge-info">{{ $item->class_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $enrolmentsQualification->enrolment_no ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->student_name->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\EnrolmentsQualification::COMPANY_SPONSORED_RADIO[$enrolmentsQualification->company_sponsored] ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->officer_name->officer_name ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->total_fees ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->amount_paid ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->outstanding_balance ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->note ?? '' }}
                            </td>
                            <td>
                                @can('enrolments_qualification_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.enrolments-qualifications.show', $enrolmentsQualification->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('enrolments_qualification_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.enrolments-qualifications.edit', $enrolmentsQualification->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('enrolments_qualification_delete')
                                    <form action="{{ route('admin.enrolments-qualifications.destroy', $enrolmentsQualification->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('enrolments_qualification_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.enrolments-qualifications.massDestroy') }}",
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
  let table = $('.datatable-officerNameEnrolmentsQualifications:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection