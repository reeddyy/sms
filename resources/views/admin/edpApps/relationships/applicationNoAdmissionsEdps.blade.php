@can('admissions_edp_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.admissions-edps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.admissionsEdp.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.admissionsEdp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-applicationNoAdmissionsEdps">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.application_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.edp_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.facilitator_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.venue') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.admission_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.participant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.company_sponsored') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.officer_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.total_fees') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.amount_paid') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.outstanding_balance') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admissionsEdps as $key => $admissionsEdp)
                        <tr data-entry-id="{{ $admissionsEdp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $admissionsEdp->id ?? '' }}
                            </td>
                            <td>
                                @foreach($admissionsEdp->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $admissionsEdp->application_no->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->edp_title->edp_title ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->end_date ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->facilitator_name->facilitator_name ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->venue->venue_name ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->admission_no ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->participant_name->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\AdmissionsEdp::COMPANY_SPONSORED_RADIO[$admissionsEdp->company_sponsored] ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->officer_name->officer_name ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->total_fees ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->amount_paid ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->outstanding_balance ?? '' }}
                            </td>
                            <td>
                                {{ $admissionsEdp->note ?? '' }}
                            </td>
                            <td>
                                @can('admissions_edp_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.admissions-edps.show', $admissionsEdp->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('admissions_edp_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.admissions-edps.edit', $admissionsEdp->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('admissions_edp_delete')
                                    <form action="{{ route('admin.admissions-edps.destroy', $admissionsEdp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('admissions_edp_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.admissions-edps.massDestroy') }}",
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
  let table = $('.datatable-applicationNoAdmissionsEdps:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection