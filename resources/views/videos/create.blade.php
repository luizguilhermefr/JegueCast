@extends('layouts.app')

@section('content')
    <form class="flex-column">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="title">{{ __('Title') }}</label>
                <div>
                    <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title"
                           placeholder="{{ __('Title') }}" required>
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-control-file col-md-6 col-sm-12">
                <label for="title">{{ __('File') }}</label>
                <div>
                    <input type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file"
                           id="file" required>
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-control-file col-md-6 col-sm-12">
                <label for="title">{{ __('Subtitles') }}</label>
                <div>
                    <input type="file" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}"
                           name="subtitle"
                           id="subtitle">
                    @if ($errors->has('subtitle'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('subtitle') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="title">{{ __('Description') }}</label>
                <div>
                    <textarea rows="3" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                              name="description" id="description"
                              placeholder="{{ __('Description') }}" required></textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('Upload') }}</button>
    </form>
@endsection
