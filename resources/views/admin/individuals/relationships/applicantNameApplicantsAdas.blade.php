@can('applicants_ada_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.applicants-adas.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.applicantsAda.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.applicantsAda.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-applicantNameApplicantsAdas">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.ada_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.award_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.validity_start') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.validity_end') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.ada_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.applicant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.amount_paid') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.payment_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.invoice_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicantsAdas as $key => $applicantsAda)
                        <tr data-entry-id="{{ $applicantsAda->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $applicantsAda->id ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->ada_status->status_name ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->award_name->award_name ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->validity_start ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->validity_end ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->ada_no ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->applicant_name->name ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->amount_paid ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->invoice_no ?? '' }}
                            </td>
                            <td>
                                {{ $applicantsAda->note ?? '' }}
                            </td>
                            <td>
                                @can('applicants_ada_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.applicants-adas.show', $applicantsAda->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('applicants_ada_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.applicants-adas.edit', $applicantsAda->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('applicants_ada_delete')
                                    <form action="{{ route('admin.applicants-adas.destroy', $applicantsAda->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('applicants_ada_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.applicants-adas.massDestroy') }}",
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
  let table = $('.datatable-applicantNameApplicantsAdas:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection