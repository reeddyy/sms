@can('results_module_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.results-modules.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.resultsModule.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.resultsModule.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-achievementTitleResultsModules">
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
                            {{ trans('cruds.resultsModule.fields.module_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_6') }}
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
                                {{ $resultsModule->module_1->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_1->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_2->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_2->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_3->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_3->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_4->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_4->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_5->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_5->grade_letter ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->module_6->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $resultsModule->grade_6->grade_letter ?? '' }}
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
  let table = $('.datatable-achievementTitleResultsModules:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection