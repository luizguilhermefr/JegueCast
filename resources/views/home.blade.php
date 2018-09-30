@extends('layouts.app')

@section('content')
    @if(session()->get('success_upload'))
        <div class="alert alert-success" role="alert">
            {{ __('Video successfully uploaded!') }}
        </div>
    @endif

    @if(count($videos))
        <section title="{{ __('Top picks') }}">
            <div class="gallery">
                @for($i = 0; $i < 4; $i++)
                    <div class="col-md-12 col-lg-3">
                        <img
                            class="img-fluid"
                            src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt=""
                        />
                        <ul>
                            <li>
                                <a href="#">
                                    Daytona Beach
                                </a></li>
                            <li>
                            <span>
                                United States
                            </span>
                            </li>
                        </ul>
                    </div>
                @endfor
            </div>
        </section>
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

