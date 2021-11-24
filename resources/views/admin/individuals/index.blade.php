@extends('layouts.admin')
@section('content')
@can('individual_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.individuals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.individual.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Individual', 'route' => 'admin.individuals.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.individual.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Individual">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.id_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.dob') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.age') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.residential_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.unit_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.email_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.company_name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.job_designation_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.duration_of_year_s_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.company_name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.job_designation_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.duration_of_year_s_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.company_name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.job_designation_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.duration_of_year_s_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.total_year_s_related_work_exp') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.qual_title_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.qual_level_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.institute_name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.year_attained_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.qual_title_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.qual_level_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.institute_name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.year_attained_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.qual_title_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.qual_level_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.institute_name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.year_attained_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.special_dietary') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.note') }}
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
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Individual::TITLE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Individual::ID_TYPE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Individual::GENDER_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
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
                    @foreach($individuals as $key => $individual)
                        <tr data-entry-id="{{ $individual->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $individual->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Individual::TITLE_SELECT[$individual->title] ?? '' }}
                            </td>
                            <td>
                                {{ $individual->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Individual::ID_TYPE_SELECT[$individual->id_type] ?? '' }}
                            </td>
                            <td>
                                {{ $individual->id_no ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Individual::GENDER_RADIO[$individual->gender] ?? '' }}
                            </td>
                            <td>
                                {{ $individual->dob ?? '' }}
                            </td>
                            <td>
                                {{ $individual->age ?? '' }}
                            </td>
                            <td>
                                {{ $individual->nationality ?? '' }}
                            </td>
                            <td>
                                {{ $individual->residential_address ?? '' }}
                            </td>
                            <td>
                                {{ $individual->unit_no ?? '' }}
                            </td>
                            <td>
                                {{ $individual->country ?? '' }}
                            </td>
                            <td>
                                {{ $individual->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $individual->contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $individual->email_address ?? '' }}
                            </td>
                            <td>
                                {{ $individual->company_name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->job_designation_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->duration_of_year_s_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->company_name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->job_designation_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->duration_of_year_s_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->company_name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->job_designation_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->duration_of_year_s_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->total_year_s_related_work_exp ?? '' }}
                            </td>
                            <td>
                                {{ $individual->qual_title_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->qual_level_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->institute_name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->year_attained_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->qual_title_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->qual_level_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->institute_name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->year_attained_2 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->qual_title_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->qual_level_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->institute_name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->year_attained_3 ?? '' }}
                            </td>
                            <td>
                                {{ $individual->special_dietary ?? '' }}
                            </td>
                            <td>
                                {{ $individual->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $individual->note ?? '' }}
                            </td>
                            <td>
                                @can('individual_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.individuals.show', $individual->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('individual_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.individuals.edit', $individual->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('individual_delete')
                                    <form action="{{ route('admin.individuals.destroy', $individual->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('individual_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.individuals.massDestroy') }}",
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
  let table = $('.datatable-Individual:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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