@extends('layouts.admin')
@section('content')
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
            <table class=" table table-bordered table-striped table-hover datatable datatable-AdmissionsEdp">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.admission_status') }}
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
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($statuses as $key => $item)
                                    <option value="{{ $item->status_name }}">{{ $item->status_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($programmes as $key => $item)
                                    <option value="{{ $item->edp_title }}">{{ $item->edp_title }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($facilitators as $key => $item)
                                    <option value="{{ $item->facilitator_name }}">{{ $item->facilitator_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($venues as $key => $item)
                                    <option value="{{ $item->venue_name }}">{{ $item->venue_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($individuals as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\AdmissionsEdp::COMPANY_SPONSORED_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($officers as $key => $item)
                                    <option value="{{ $item->officer_name }}">{{ $item->officer_name }}</option>
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
                        </td>
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
                                {{ $admissionsEdp->admission_status->status_name ?? '' }}
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



@endsection
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
  let table = $('.datatable-AdmissionsEdp:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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