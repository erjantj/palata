@extends('layouts.main')

@section('_header', 'Page Title')

@section('content')
    <h2>{{ $news->title }}</h2>
    <p>{!! $news->body !!}</p>
    <p></p>
@endsection
