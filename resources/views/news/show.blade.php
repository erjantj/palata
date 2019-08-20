@extends('layouts.main')

@section('title', $news->title)

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
  	<div class="post__container">
	    <h1>{{ $news->title }}</h1>
	    <div class="post__date">{{ $news->created_at->formatLocalized('%d %B %Y') }}</div>
	    <p class="post__excerpt">{!! $news->excerpt !!}</p>
	    <img class="post__image-header" src="{{ Voyager::image( $news->image ) }}" />
	    <div class="post__body">{!! $news->body !!}</div>
	</div>
  </div>
</div>
@endsection
