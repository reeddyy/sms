@can('corporates_app_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.corporates-apps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.corporatesApp.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.corporatesApp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-statusCorporatesApps">
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
                            &nbsp;
                        </th>
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
  let table = $('.datatable-statusCorporatesApps:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection