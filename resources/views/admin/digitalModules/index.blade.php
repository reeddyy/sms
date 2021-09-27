@extends('layouts.admin')
@section('content')
@can('digital_module_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.digital-modules.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.digitalModule.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.digitalModule.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-DigitalModule">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_abbr') }}
                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.digitalModule.fields.note') }}
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
                                @foreach($levels as $key => $item)
                                    <option value="{{ $item->level_name }}">{{ $item->level_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\DigitalModule::MODULE_STATUS_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($digitalModules as $key => $digitalModule)
                        <tr data-entry-id="{{ $digitalModule->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $digitalModule->id ?? '' }}
                            </td>
                            <td>
                                {{ $digitalModule->module_name ?? '' }}
                            </td>
                            <td>
                                {{ $digitalModule->module_abbr ?? '' }}
                            </td>
                            <td>
                                {{ $digitalModule->module_code ?? '' }}
                            </td>
                            <td>
                                {{ $digitalModule->level->level_name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\DigitalModule::MODULE_STATUS_RADIO[$digitalModule->module_status] ?? '' }}
                            </td>
                            <td>
                                {{ $digitalModule->note ?? '' }}
                            </td>
                            <td>
                                @can('digital_module_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.digital-modules.show', $digitalModule->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('digital_module_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.digital-modules.edit', $digitalModule->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('digital_module_delete')
                                    <form action="{{ route('admin.digital-modules.destroy', $digitalModule->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('digital_module_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.digital-modules.massDestroy') }}",
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
  let table = $('.datatable-DigitalModule:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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