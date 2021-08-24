@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.membership.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.memberships.update", [$membership->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="membership_no">{{ trans('cruds.membership.fields.membership_no') }}</label>
                <input class="form-control {{ $errors->has('membership_no') ? 'is-invalid' : '' }}" type="text" name="membership_no" id="membership_no" value="{{ old('membership_no', $membership->membership_no) }}" required>
                @if($errors->has('membership_no'))
                    <span class="text-danger">{{ $errors->first('membership_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.membership_no_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection