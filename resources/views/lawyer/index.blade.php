@extends('layouts.main')

@section('_header', 'Page Title')

@section('content')
    @foreach ($lawyersList as $lawyer)
        <h2>{{ $lawyer->full_name }}</h2>
        <p></p>
    @endforeach
@endsection
