@can('programme_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.programmes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.programme.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.programme.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-levelProgrammes">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.edp_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.edp_abbr') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.duration_day') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.member_rate') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.public_rate') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.edp_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.programme.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programmes as $key => $programme)
                        <tr data-entry-id="{{ $programme->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $programme->id ?? '' }}
                            </td>
                            <td>
                                {{ $programme->edp_title ?? '' }}
                            </td>
                            <td>
                                {{ $programme->edp_abbr ?? '' }}
                            </td>
                            <td>
                                {{ $programme->duration_day ?? '' }}
                            </td>
                            <td>
                                {{ $programme->level->level_name ?? '' }}
                            </td>
                            <td>
                                {{ $programme->member_rate ?? '' }}
                            </td>
                            <td>
                                {{ $programme->public_rate ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Programme::EDP_STATUS_RADIO[$programme->edp_status] ?? '' }}
                            </td>
                            <td>
                                {{ $programme->note ?? '' }}
                            </td>
                            <td>
                                @can('programme_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.programmes.show', $programme->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('programme_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.programmes.edit', $programme->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('programme_delete')
                                    <form action="{{ route('admin.programmes.destroy', $programme->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('programme_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.programmes.massDestroy') }}",
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
  let table = $('.datatable-levelProgrammes:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection