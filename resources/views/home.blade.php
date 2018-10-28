@extends('layouts.app')

@section('content')
    @if(session()->get('success_upload'))
        <div class="alert alert-success" role="alert">
            {{ __('Video successfully uploaded!') }}
        </div>
    @endif

    @if(count($videos))
        <div class="gallery">
            @foreach($videos as $video)
                <div class="col-sm-12 col-md-3">
                    <a href="videos/{{$video->uuid}}">
                        <img
                            class="img-fluid"
                            src="{{ $video->thumbnail() }}"
                            alt=""
                        />
                    </a>
                    <span class="video-title">
                        <a href="videos/{{$video->uuid}}">
                            {{ $video->title }}
                        </a>
                    </span>
                    <br/>
                    <span class="video-author">
                        {{ $video->user->name }}
                    </span>
                </div>
            @endforeach
        </div>
    @else
        <div class="col-12">
            <img class="img-fluid" src="{{ asset('img/logo.png') }}"/>
            <h3> {{  __('Welcome to JegueCast!') }} </h3>
            <p>{{ __('Upload your first video and start watching!') }}</p>
            <button type="button" class="btn btn-primary">
                <i class="material-icons">cloud_upload</i> {{ __('Upload')  }}
            </button>
        </div>
    @endif
@endsection

