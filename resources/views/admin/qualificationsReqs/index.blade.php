@extends('layouts.admin')
@section('content')
@can('qualifications_req_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.qualifications-reqs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.qualificationsReq.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'QualificationsReq', 'route' => 'admin.qualifications-reqs.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.qualificationsReq.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-QualificationsReq">
                <thead>
                    <tr>
                        <th>
                            &nbsp;
                        </th>
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
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($status_leads as $key => $item)
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($qualificationsReqs as $key => $qualificationsReq)
                        <tr data-entry-id="{{ $qualificationsReq->id }}">
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
  let table = $('.datatable-QualificationsReq:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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