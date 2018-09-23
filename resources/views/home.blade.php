@extends('layouts.app')

@section('content')
    @if(session()->get('success_upload'))
    <div class="alert alert-success" role="alert">
        {{ __('Video successfully uploaded!') }}
    </div>
    @endif
@endsection
