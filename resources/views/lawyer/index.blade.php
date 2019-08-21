@extends('layouts.main')

@section('title', $page->title)

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
  	<h1>{{ $page->title }}</h1>
  	<p class="lead">{{ $page->excerpt }}</p>
  </div>
  <div class="col-md-12 col-xs-12">
    <div class="row team-carousel">
    	@foreach ($lawyersList as $lawyer)
		<div class="col-md-4 col-xs-4 owl-theme owl-one">
			<div class="item">
				<!-- change image-->
				<div class="team-image"> <img src="{{ Voyager::image( $lawyer->image) }}" alt="manager"> </div>
				<!-- change name-->
				<div class="team-info"> 
					<span>{{ $lawyer->full_name }}</span>
					<!-- change job-->
					<br> 
					<span>{{ $lawyer->position }}</span> 
				</div>
			</div>
		</div>
    	@endforeach
	</div>
  </div>
</div>
    
@endsection
