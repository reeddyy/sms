@extends('layouts.admin')
@section('content')
@can('qualifications_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.qualifications-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.qualificationsApp.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'QualificationsApp', 'route' => 'admin.qualifications-apps.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.qualificationsApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-QualificationsApp">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.application_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.sponsorship') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.course') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.commencement') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_country') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_contact') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.applicant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.dob') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.designation_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.duration_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.designation_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.duration_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.designation_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.duration_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.qualification_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.institute_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.year_attained_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.qualification_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.institute_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.year_attained_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.qualification_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.institute_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.year_attained_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_front') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_back') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.certificate') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.note') }}
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
                                @foreach($status_apps as $key => $item)
                                    <option value="{{ $item->status_name }}">{{ $item->status_name }}</option>
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
                    @foreach($qualificationsApps as $key => $qualificationsApp)
                        <tr data-entry-id="{{ $qualificationsApp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $qualificationsApp->id ?? '' }}
                            </td>
                            <td>
                                @foreach($qualificationsApp->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $qualificationsApp->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->sponsorship ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->level ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->course ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->commencement ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_address ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_country ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->officer_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->officer_designation ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->officer_contact ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->officer_email ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->applicant_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->gender ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->id_type ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->id_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->dob ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->nationality ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->address ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->country ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->email ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->designation_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->duration_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->designation_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->duration_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->company_name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->designation_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->duration_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->qualification_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->level_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->institute_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->year_attained_1 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->qualification_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->level_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->institute_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->year_attained_2 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->qualification_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->level_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->institute_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->year_attained_3 ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->id_front ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->id_back ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->certificate ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsApp->note ?? '' }}
                            </td>
                            <td>
                                @can('qualifications_app_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.qualifications-apps.show', $qualificationsApp->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('qualifications_app_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.qualifications-apps.edit', $qualificationsApp->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('qualifications_app_delete')
                                    <form action="{{ route('admin.qualifications-apps.destroy', $qualificationsApp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('qualifications_app_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.qualifications-apps.massDestroy') }}",
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
  let table = $('.datatable-QualificationsApp:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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