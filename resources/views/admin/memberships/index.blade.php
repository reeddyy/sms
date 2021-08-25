@extends('layouts.admin')
@section('content')
@can('membership_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.memberships.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.membership.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.membership.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Membership">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.membership_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.member_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.individual.fields.email_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.member_class') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.membership_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.membership_expiry_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.membership_validity') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.no_of_renewal') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.payment_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.payment_receipt_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.membership.fields.payment_note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($memberships as $key => $membership)
                        <tr data-entry-id="{{ $membership->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $membership->id ?? '' }}
                            </td>
                            <td>
                                {{ $membership->membership_no ?? '' }}
                            </td>
                            <td>
                                {{ $membership->member_name->name ?? '' }}
                            </td>
                            <td>
                                {{ $membership->member_name->email_address ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Membership::MEMBER_CLASS_RADIO[$membership->member_class] ?? '' }}
                            </td>
                            <td>
                                {{ $membership->membership_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $membership->membership_expiry_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Membership::MEMBERSHIP_VALIDITY_RADIO[$membership->membership_validity] ?? '' }}
                            </td>
                            <td>
                                {{ $membership->no_of_renewal ?? '' }}
                            </td>
                            <td>
                                {{ $membership->payment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $membership->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $membership->payment_receipt_no ?? '' }}
                            </td>
                            <td>
                                {{ $membership->payment_note ?? '' }}
                            </td>
                            <td>
                                @can('membership_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.memberships.show', $membership->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('membership_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.memberships.edit', $membership->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('membership_delete')
                                    <form action="{{ route('admin.memberships.destroy', $membership->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('membership_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.memberships.massDestroy') }}",
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
  let table = $('.datatable-Membership:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection