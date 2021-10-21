@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.memberClass.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.member-classes.update", [$memberClass->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="member_class_name">{{ trans('cruds.memberClass.fields.member_class_name') }}</label>
                <input class="form-control {{ $errors->has('member_class_name') ? 'is-invalid' : '' }}" type="text" name="member_class_name" id="member_class_name" value="{{ old('member_class_name', $memberClass->member_class_name) }}" required>
                @if($errors->has('member_class_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_class_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.memberClass.fields.member_class_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.memberClass.fields.member_category') }}</label>
                @foreach(App\Models\MemberClass::MEMBER_CATEGORY_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('member_category') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="member_category_{{ $key }}" name="member_category" value="{{ $key }}" {{ old('member_category', $memberClass->member_category) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="member_category_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('member_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.memberClass.fields.member_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.memberClass.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $memberClass->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.memberClass.fields.note_helper') }}</span>
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