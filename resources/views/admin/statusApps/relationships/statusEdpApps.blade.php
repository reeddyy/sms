@can('edp_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.edp-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.edpApp.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.edpApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-statusEdpApps">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.application_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.sponsorship') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.no_participants') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.programme') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.commencement') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.company_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_contact') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpApp.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($edpApps as $key => $edpApp)
                        <tr data-entry-id="{{ $edpApp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $edpApp->id ?? '' }}
                            </td>
                            <td>
                                @foreach($edpApp->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $edpApp->application_no ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->sponsorship ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->no_participants ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->level ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->programme ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->commencement ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->company_address ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->country ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->officer_name ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->officer_designation ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->officer_contact ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->officer_email ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->participant_name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->gender_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->id_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->designation_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->duration_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->contact_no_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->email_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->special_dietary_1 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->participant_name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->gender_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->id_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->designation_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->duration_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->contact_no_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->email_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->special_dietary_2 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->participant_name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->gender_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->id_no_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->designation_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->duration_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->contact_no_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->email_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->special_dietary_3 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->participant_name_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->gender_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->id_no_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->designation_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->duration_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->contact_no_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->email_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->special_dietary_4 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->participant_name_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->gender_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->id_no_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->designation_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->duration_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->contact_no_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->email_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->special_dietary_5 ?? '' }}
                            </td>
                            <td>
                                {{ $edpApp->note ?? '' }}
                            </td>
                            <td>
                                @can('edp_app_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.edp-apps.show', $edpApp->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('edp_app_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.edp-apps.edit', $edpApp->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('edp_app_delete')
                                    <form action="{{ route('admin.edp-apps.destroy', $edpApp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('edp_app_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.edp-apps.massDestroy') }}",
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
  let table = $('.datatable-statusEdpApps:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection