@extends('layouts.admin')
@section('content')
@can('ada_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.ada-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.adaApp.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'AdaApp', 'route' => 'admin.ada-apps.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.adaApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-AdaApp">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.application_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.award_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.dob') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.company_name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.designation_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.duration_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.country_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.company_name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.designation_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.duration_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.country_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.company_name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.designation_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.duration_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.country_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.programme_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.date_awarded_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.programme_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.date_awarded_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.programme_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_no_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.date_awarded_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.adaApp.fields.note') }}
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
                    @foreach($adaApps as $key => $adaApp)
                        <tr data-entry-id="{{ $adaApp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $adaApp->id ?? '' }}
                            </td>
                            <td>
                                @foreach($adaApp->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $adaApp->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->award_name ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->title ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->name ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->id_no ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->gender ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->dob ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->nationality ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->address ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->country ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->email ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->company_name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->designation_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->duration_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->country_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->company_name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->designation_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->duration_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->country_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->company_name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->designation_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->duration_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->country_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->programme_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->certificate_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->date_awarded_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->certificate_1 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->programme_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->certificate_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->date_awarded_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->certificate_2 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->programme_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->certificate_no_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->date_awarded_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->certificate_3 ?? '' }}
                            </td>
                            <td>
                                {{ $adaApp->note ?? '' }}
                            </td>
                            <td>
                                @can('ada_app_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.ada-apps.show', $adaApp->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('ada_app_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.ada-apps.edit', $adaApp->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('ada_app_delete')
                                    <form action="{{ route('admin.ada-apps.destroy', $adaApp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('ada_app_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.ada-apps.massDestroy') }}",
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
  let table = $('.datatable-AdaApp:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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