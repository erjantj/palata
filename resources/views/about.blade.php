@extends('layouts.main')

@section('content')

    <h1>{{ $page->title }}</h1>
    <p>{!! $page->body !!}</p>

@endsection
