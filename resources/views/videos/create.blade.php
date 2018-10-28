@extends('layouts.app')

@section('content')
    <form class="flex-column" method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8 col-sm-12">
                <input
                    class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                    name="title"
                    id="title"
                    placeholder="{{ __('Title') }}"
                    value="{{ old('title') }}"
                    required
                    autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-md-4 col-sm-12">
                <input
                    class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                    name="year"
                    id="year"
                    placeholder="{{ __('Year') }}"
                    value="{{ old('year') }}"
                    type="number"
                    min="0"
                    max="{{ date("Y") }}"
                    step="1"
                    pattern="\d\d\d\d">

                @if ($errors->has('year'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-row">
            <div class="form-control-file col-md-6 col-sm-12 mb-3">
                <input
                    class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}"
                    type="file"
                    name="file"
                    id="file"
                    value="{{ old('file') }}"
                    accept=".mp4,.avi,.mkv"
                    required>

                @if ($errors->has('file'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-control-file col-sm-12 col-md-6 mb-3">
                <input
                    class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}"
                    type="file"
                    name="subtitle"
                    id="subtitle"
                    value="{{ old('subtitle') }}"
                    accept=".srt,.txt">

                @if ($errors->has('subtitle'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('subtitle') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <textarea
                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                    name="description"
                    id="description"
                    rows="3"
                    placeholder="{{ __('Description') }}">
                    {{ old('description') }}
                </textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="private"
                        id="private"
                        value="1"
                        {{ old('private') ? 'checked' : '' }}>

                    <label class="form-check-label" for="private">
                        {{ __('Private') }}
                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="parental_control"
                        id="parental_control"
                        value="1"
                        {{ old('parental_control') ? 'checked' : '' }}>

                    <label class="form-check-label" for="parental_control">
                        {{ __('Parental control') }}
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Upload') }}
        </button>
    </form>
@endsection

