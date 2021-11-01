@extends('layouts.admin')
@section('content')
@can('corporate_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.corporates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.corporate.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Corporate', 'route' => 'admin.corporates.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.corporate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Corporate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.business_reg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.company_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.unit_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.phone_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.website') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.company_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.industry_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.employees_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.annual_turnover') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.title_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.designation_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.office_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.mobile_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.title_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.designation_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.office_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.mobile_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.name_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.name_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.applicant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.office_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporate.fields.note') }}
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
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Corporate::TITLE_1_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
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
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Corporate::TITLE_2_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
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
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Corporate::TITLE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($corporates as $key => $corporate)
                        <tr data-entry-id="{{ $corporate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $corporate->id ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->business_reg_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->company_address ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->unit_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->country ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->phone_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->website ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->company_type ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->industry_type ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->employees_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->annual_turnover ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Corporate::TITLE_1_SELECT[$corporate->title_1] ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->designation_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->email_address_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->office_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->mobile_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Corporate::TITLE_2_SELECT[$corporate->title_2] ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->designation_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->email_address_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->office_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->mobile_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->email_address_3 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->name_4 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->email_address_4 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->name_5 ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->email_address_5 ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Corporate::TITLE_SELECT[$corporate->title] ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->applicant_name ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->designation ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->email_address ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->office_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $corporate->note ?? '' }}
                            </td>
                            <td>
                                @can('corporate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.corporates.show', $corporate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('corporate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.corporates.edit', $corporate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('corporate_delete')
                                    <form action="{{ route('admin.corporates.destroy', $corporate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('corporate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.corporates.massDestroy') }}",
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
  let table = $('.datatable-Corporate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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