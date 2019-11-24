@extends('layouts.main')

@section('title', $page->title)

@section('content')

    <h1>{{ $page->title }}</h1>
    <p>{{ $page->excerpt }}</p>
    <p>{!! $page->body !!}</p>

@endsection
