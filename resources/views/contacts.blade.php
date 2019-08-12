@extends('layouts.main')

@section('content')

    <h1>{{ $page->title }}</h1>
    <p>{!! $page->body !!}</p>
    <div>
        <h2>{{ __('messages.address') }}</h2>
        <p>{{ $contact->address }}</p>
    </div>
    <div>
        <h2>{{ __('messages.phone_number') }}</h2>
        <p>{{ $contact->phone_number }}</p>
    </div>
    <div>
        <h2>{{ __('messages.email') }}</h2>
        <p>{{ $contact->email }}</p>
    </div>


@endsection
