@can('qualifications_req_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.qualifications-reqs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.qualificationsReq.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.qualificationsReq.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-statusQualificationsReqs">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.course') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.level') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.hear_about_us') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.job_function') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.industry') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.contact_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($qualificationsReqs as $key => $qualificationsReq)
                        <tr data-entry-id="{{ $qualificationsReq->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $qualificationsReq->id ?? '' }}
                            </td>
                            <td>
                                @foreach($qualificationsReq->statuses as $key => $item)
                                    <span class="badge badge-info">{{ $item->status_name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $qualificationsReq->course ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->level ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->hear_about_us ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->name ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->designation ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->job_function ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->industry ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->contact_no ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->email ?? '' }}
                            </td>
                            <td>
                                {{ $qualificationsReq->note ?? '' }}
                            </td>
                            <td>
                                @can('qualifications_req_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.qualifications-reqs.show', $qualificationsReq->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('qualifications_req_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.qualifications-reqs.edit', $qualificationsReq->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('qualifications_req_delete')
                                    <form action="{{ route('admin.qualifications-reqs.destroy', $qualificationsReq->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('qualifications_req_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.qualifications-reqs.massDestroy') }}",
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
  let table = $('.datatable-statusQualificationsReqs:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection