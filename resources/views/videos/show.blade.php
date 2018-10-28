@extends('layouts.app')

@section('head')
    <title>
        {{ $video->title }} - {{ config('app.name') }}
    </title>
@endsection

@section('content')
    <div>
        <h1> {{ $video->title }}</h1>
    </div>
@endsection
