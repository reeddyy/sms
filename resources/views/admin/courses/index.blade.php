@extends('layouts.admin')
@section('content')
@can('course_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.courses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.course.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.course.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Course">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.course.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_abbr') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_level') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_modules') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.course_duration') }}
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
                            {{ trans('cruds.course.fields.no_of_instalment') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.instalment_1_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.instalment_2_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.instalment_3_fee') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $key => $course)
                        <tr data-entry-id="{{ $course->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $course->id ?? '' }}
                            </td>
                            <td>
                                {{ $course->course_name ?? '' }}
                            </td>
                            <td>
                                {{ $course->course_abbr ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Course::COURSE_LEVEL_RADIO[$course->course_level] ?? '' }}
                            </td>
                            <td>
                                @foreach($course->course_modules as $key => $item)
                                    <span class="badge badge-info">{{ $item->module_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $course->course_duration ?? '' }}
                            </td>
                            <td>
                                {{ $course->course_total_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->course_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->m_el_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->examination_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->registration_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->no_of_instalment ?? '' }}
                            </td>
                            <td>
                                {{ $course->instalment_1_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->instalment_2_fee ?? '' }}
                            </td>
                            <td>
                                {{ $course->instalment_3_fee ?? '' }}
                            </td>
                            <td>
                                @can('course_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.courses.show', $course->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('course_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.courses.edit', $course->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('course_delete')
                                    <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('course_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.courses.massDestroy') }}",
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
  let table = $('.datatable-Course:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection