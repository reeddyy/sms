@can('edp_req_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.edp-reqs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.edpReq.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.edpReq.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-statusEdpReqs">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.programme') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.job_function') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.industry') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.edpReq.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($edpReqs as $key => $edpReq)
                        <tr data-entry-id="{{ $edpReq->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $edpReq->id ?? '' }}
                            </td>
                            <td>
                                @foreach($edpReq->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $edpReq->programme ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->level ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->name ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->designation ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->job_function ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->industry ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->email ?? '' }}
                            </td>
                            <td>
                                {{ $edpReq->note ?? '' }}
                            </td>
                            <td>
                                @can('edp_req_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.edp-reqs.show', $edpReq->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('edp_req_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.edp-reqs.edit', $edpReq->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('edp_req_delete')
                                    <form action="{{ route('admin.edp-reqs.destroy', $edpReq->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('edp_req_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.edp-reqs.massDestroy') }}",
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
  let table = $('.datatable-statusEdpReqs:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection