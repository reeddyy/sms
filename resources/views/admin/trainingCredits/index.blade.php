@extends('layouts.admin')
@section('content')
@can('training_credit_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.training-credits.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.trainingCredit.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.trainingCredit.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-TrainingCredit">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.membership_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.tc_brought_forward') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.training_credit') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.digital_resisilience_fund') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.digital_enabler_fund') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.cf_used') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.cf_avaliable') }}
                        </th>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.valid_till') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainingCredits as $key => $trainingCredit)
                        <tr data-entry-id="{{ $trainingCredit->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $trainingCredit->id ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->membership_no->membership_no ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->tc_brought_forward ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->training_credit ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->digital_resisilience_fund ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->digital_enabler_fund ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->cf_used ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->cf_avaliable ?? '' }}
                            </td>
                            <td>
                                {{ $trainingCredit->valid_till ?? '' }}
                            </td>
                            <td>
                                @can('training_credit_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.training-credits.show', $trainingCredit->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('training_credit_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.training-credits.edit', $trainingCredit->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('training_credit_delete')
                                    <form action="{{ route('admin.training-credits.destroy', $trainingCredit->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('training_credit_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.training-credits.massDestroy') }}",
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
  let table = $('.datatable-TrainingCredit:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection