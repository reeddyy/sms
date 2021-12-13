@extends('layouts.admin')
@section('content')
@can('corporates_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.corporates-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.corporatesApp.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'CorporatesApp', 'route' => 'admin.corporates-apps.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.corporatesApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CorporatesApp">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.application_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.member_class') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.business_reg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_website') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.industry_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.no_employees') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.annual_turnover') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.title_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.designation_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.office_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.mobile_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.title_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.designation_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.office_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.mobile_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.business_profile') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.cold_chain') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.contract_law') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.cost_price_analysis') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.delivery_and_last_mile') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.digital_technologies') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.integrated_logistics') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.inventory') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.lean_six_sigma') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.negotiation') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.performance_evaluation') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.professional_networking') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.shipping_and_freight') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.sourcing') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.supply_chain_management') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.tender_and_contract') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.transportation') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.warehousing') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.others') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.applicant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.office_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.priority_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.note') }}
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
                    @foreach($corporatesApps as $key => $corporatesApp)
                        <tr data-entry-id="{{ $corporatesApp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $corporatesApp->id ?? '' }}
                            </td>
                            <td>
                                @foreach($corporatesApp->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $corporatesApp->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->member_class ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->business_reg_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->company_address ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->country ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->company_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->company_website ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->company_type ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->industry_type ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->no_employees ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->annual_turnover ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->title_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->designation_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->email_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->office_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->mobile_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->title_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->designation_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->email_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->office_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->mobile_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->email_3 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->name_4 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->email_4 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->name_5 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->email_5 ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->business_profile ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->cold_chain ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->contract_law ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->cost_price_analysis ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->delivery_and_last_mile ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->digital_technologies ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->integrated_logistics ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->inventory ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->lean_six_sigma ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->negotiation ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->performance_evaluation ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->professional_networking ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->shipping_and_freight ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->sourcing ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->supply_chain_management ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->tender_and_contract ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->transportation ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->warehousing ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->others ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->title ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->applicant_name ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->designation ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->email ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->office_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->priority_code ?? '' }}
                            </td>
                            <td>
                                {{ $corporatesApp->note ?? '' }}
                            </td>
                            <td>
                                @can('corporates_app_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.corporates-apps.show', $corporatesApp->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('corporates_app_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.corporates-apps.edit', $corporatesApp->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('corporates_app_delete')
                                    <form action="{{ route('admin.corporates-apps.destroy', $corporatesApp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('corporates_app_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.corporates-apps.massDestroy') }}",
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
  let table = $('.datatable-CorporatesApp:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
