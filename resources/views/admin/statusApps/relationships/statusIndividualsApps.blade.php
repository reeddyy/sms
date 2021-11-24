@can('individuals_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.individuals-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.individualsApp.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.individualsApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-statusIndividualsApps">
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
                            {{ trans('cruds.individualsApp.fields.performance_evaluation') }}
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
                                <span style="display:none">{{ $individualsApp->cold_chain ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->cold_chain ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->performance_evaluation ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->performance_evaluation ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->contract_law ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->contract_law ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->cost_price_analysis ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->cost_price_analysis ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->delivery_and_last_mile ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->delivery_and_last_mile ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->digital_technologies ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->digital_technologies ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->integrated_logistics ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->integrated_logistics ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->inventory ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->inventory ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->lean_six_sigma ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->lean_six_sigma ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->negotiation ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->negotiation ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->professional_networking ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->professional_networking ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->shipping_and_freight ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->shipping_and_freight ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->sourcing ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->sourcing ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->supply_chain_management ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->supply_chain_management ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->tender_and_contract ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->tender_and_contract ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->transportation ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->transportation ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $individualsApp->warehousing ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $individualsApp->warehousing ? 'checked' : '' }}>
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
  let table = $('.datatable-statusIndividualsApps:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection