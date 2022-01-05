@extends('layouts.admin')
@section('content')
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
            <table class=" table table-bordered table-striped table-hover datatable datatable-EnrolmentsQualification">
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
                            {{ trans('cruds.enrolmentsQualification.fields.application_no') }}
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
                            {{ trans('cruds.enrolmentsQualification.fields.instalment_fee_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.due_date_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.instalment_fee_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.due_date_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.instalment_fee_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.due_date_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($status_qualifications as $key => $item)
                                    <option value="{{ $item->status_name }}">{{ $item->status_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($qualifications_apps as $key => $item)
                                    <option value="{{ $item->application_no }}">{{ $item->application_no }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($courses as $key => $item)
                                    <option value="{{ $item->course_title }}">{{ $item->course_title }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($class_intakes as $key => $item)
                                    <option value="{{ $item->class_name }}">{{ $item->class_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($individuals as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\EnrolmentsQualification::COMPANY_SPONSORED_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($officers as $key => $item)
                                    <option value="{{ $item->officer_name }}">{{ $item->officer_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
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
                                {{ $enrolmentsQualification->application_no->application_no ?? '' }}
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
                                {{  number_format((float)($enrolmentsQualification->total_fees - $enrolmentsQualification->amount_paid), 2, '.', '');
                                 }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->instalment_fee_1 ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->due_date_1 ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->instalment_fee_2 ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->due_date_2 ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->instalment_fee_3 ?? '' }}
                            </td>
                            <td>
                                {{ $enrolmentsQualification->due_date_3 ?? '' }}
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



@endsection
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
  let table = $('.datatable-EnrolmentsQualification:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
    
})

</script>
@endsection