@extends('layouts.admin')
@section('content')
@can('individuals_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.individuals-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.individualsApp.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'IndividualsApp', 'route' => 'admin.individuals-apps.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.individualsApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-IndividualsApp">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.application_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.member_class') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.dob') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.lps_exp') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.duration') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.job_function') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.industry_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.company_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.country_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.postal_code_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.qualification') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.institute') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.year_attained') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id_front') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id_back') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.certificate') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.cold_chain') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.contract_law') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.cost_price_analysis') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.delivery_and_last_mile') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.digital_technologies') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.integrated_logistics') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.inventory') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.lean_six_sigma') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.negotiation') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.performance_evaluation') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.professional_networking') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.shipping_and_freight') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.sourcing') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.supply_chain_management') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.tender_and_contract') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.transportation') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.warehousing') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.others') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.priority_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.individualsApp.fields.note') }}
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
                    @foreach($individualsApps as $key => $individualsApp)
                        <tr data-entry-id="{{ $individualsApp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $individualsApp->id ?? '' }}
                            </td>
                            <td>
                                @foreach($individualsApp->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $individualsApp->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->member_class ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->title ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->name ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->id_no ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->gender ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->dob ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->nationality ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->address ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->country ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->email ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->lps_exp ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->designation ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->duration ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->job_function ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->industry_type ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->company_address ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->country_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->postal_code_1 ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->qualification ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->level ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->institute ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->year_attained ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->id_front ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->id_back ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->certificate ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->cold_chain ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->contract_law ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->cost_price_analysis ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->delivery_and_last_mile ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->digital_technologies ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->integrated_logistics ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->inventory ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->lean_six_sigma ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->negotiation ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->performance_evaluation ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->professional_networking ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->shipping_and_freight ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->sourcing ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->supply_chain_management ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->tender_and_contract ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->transportation ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->warehousing ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->others ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->priority_code ?? '' }}
                            </td>
                            <td>
                                {{ $individualsApp->note ?? '' }}
                            </td>
                            <td>
                                @can('individuals_app_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.individuals-apps.show', $individualsApp->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('individuals_app_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.individuals-apps.edit', $individualsApp->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('individuals_app_delete')
                                    <form action="{{ route('admin.individuals-apps.destroy', $individualsApp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('individuals_app_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.individuals-apps.massDestroy') }}",
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
  let table = $('.datatable-IndividualsApp:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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