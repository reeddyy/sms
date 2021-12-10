@extends('layouts.admin')
@section('content')
@can('results_module_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.results-modules.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.resultsModule.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'ResultsModule', 'route' => 'admin.results-modules.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.resultsModule.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ResultsModule">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.enrolment_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.date_release') }}
                        </th>
                        <th>
                            Student Name
                        </th>
                        <th>
                            Student ID No.
                        </th>
                        <th>
                            Course Title
                        </th>
                        <th>
                            Start Date
                        </th>
                        <th>
                            End Date
                        </th>
                        <th>
                            Outstanding Balance
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_1') }}
                        </th>
                        <th>
                            1. Code
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_1') }}
                        </th>
                        <th>
                            1. Description
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_2') }}
                        </th>
                        <th>
                            2. Code
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_2') }}
                        </th>
                        <th>
                            2. Description
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_3') }}
                        </th>
                        <th>
                            3. Code
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_3') }}
                        </th>
                        <th>
                            3. Description
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_4') }}
                        </th>
                        <th>
                            4. Code
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_4') }}
                        </th>
                        <th>
                            4. Description
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_5') }}
                        </th>
                        <th>
                            5. Code
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_5') }}
                        </th>
                        <th>
                            5. Description
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_6') }}
                        </th>
                        <th>
                            6. Code
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_6') }}
                        </th>
                        <th>
                            6. Description
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.total_result_points') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.achievement_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.date_transcript_sent_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.date_transcript_sent_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.note') }}
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
                                @foreach($enrolments_qualifications as $key => $item)
                                    <option value="{{ $item->enrolment_no }}">{{ $item->enrolment_no }}</option>
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
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($modules as $key => $item)
                                    <option value="{{ $item->module_name }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($grades as $key => $item)
                                    <option value="{{ $item->grade_letter }}">{{ $item->grade_letter }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($modules as $key => $item)
                                    <option value="{{ $item->module_name }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($grades as $key => $item)
                                    <option value="{{ $item->grade_letter }}">{{ $item->grade_letter }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($modules as $key => $item)
                                    <option value="{{ $item->module_name }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($grades as $key => $item)
                                    <option value="{{ $item->grade_letter }}">{{ $item->grade_letter }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($modules as $key => $item)
                                    <option value="{{ $item->module_name }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">                            
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($grades as $key => $item)
                                    <option value="{{ $item->grade_letter }}">{{ $item->grade_letter }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($modules as $key => $item)
                                    <option value="{{ $item->module_name }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($grades as $key => $item)
                                    <option value="{{ $item->grade_letter }}">{{ $item->grade_letter }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($modules as $key => $item)
                                    <option value="{{ $item->module_name }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($grades as $key => $item)
                                    <option value="{{ $item->grade_letter }}">{{ $item->grade_letter }}</option>
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
                                @foreach($achievements as $key => $item)
                                    <option value="{{ $item->achievement_title }}">{{ $item->achievement_title }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($resultsModules as $key => $resultsModule)
                        <tr data-entry-id="{{ $resultsModule->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $resultsModule->id ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->enrolment_no->enrolment_no ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->date_release ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->enrolment_no->student_name->name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->enrolment_no->student_name->id_no ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->enrolment_no->course_title->course_title ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->enrolment_no->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->enrolment_no->end_date ?? '' }}
                            </td>
                            <td>
                                {{ number_format($resultsModule->enrolment_no->outstanding_balance, 2, '.', ',') ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_1->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_1->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_1->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_1->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_2->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_2->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_2->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_2->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_3->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_3->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_3->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_3->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_4->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_4->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_4->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_4->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_5->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_5->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_5->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_5->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_6->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_6->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_6->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_6->grade_description ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->total_result_points ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->achievement_title->achievement_title ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->date_transcript_sent_1 ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->date_transcript_sent_2 ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->note ?? '' }}
                            </td>
                            <td>
                                @can('results_module_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.results-modules.show', $resultsModule->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('results_module_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.results-modules.edit', $resultsModule->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('results_module_delete')
                                    <form action="{{ route('admin.results-modules.destroy', $resultsModule->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('results_module_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.results-modules.massDestroy') }}",
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
  let table = $('.datatable-ResultsModule:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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