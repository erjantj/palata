@extends('layouts.main')

@section('title', $page->title)

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
  	<h1>{{ $page->title }}</h1>
  	<p class="post__excerpt">{!! $page->body !!}</p>
  </div>
  <div class="col-md-12 col-xs-12">
    <div class="row team-carousel">
        @include('lawyer/_lawyers', ['lawyersList' => $lawyersList])
	</div>
  </div>
</div>
    
@endsection
