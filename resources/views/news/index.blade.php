@extends('layouts.main')

@section('_header', 'Page Title')

@section('content')
    @foreach ($newsList as $news)
        <h2>{{ $news->title }}</h2>
        <p>{!! $news->excerpt !!}</p>
        <p><a href="news/{{ $news->slug }}">{{ __('messages.more') }}</a></p>
        <p></p>
    @endforeach
@endsection
