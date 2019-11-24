@extends('layouts.index')

@section('content')

<div class="slideshow">
	<div class="background">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				<!-- Change image from here -->	
					<div class="overlay-slider"></div> 
					<img src="{{ Voyager::image(setting('site.image')) }}" alt="...">
					<div class="slider-text">
					<!-- Change content from here -->	
						<h3 class="">{{ setting('site.title') }}</h3>
						<p class=" para animated fadeInLeft"> 
							{{ setting('site.description') }}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section id="services">
	<div class="container">
		<div class="row">
			<div class="services-title">
				<h2>
					<span class="left-line"></span> 
					{{ __('messages.services_title') }}
					<span class="right-line"></span></h2>
				<!-- Change content from here -->
				<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatem fugit voluptates atque reiciendis commodi.</p>
			</div>
			<div class="services-item">
				<div class="row">
					<div class="item col-md-4">
						<!-- Change content from here -->
						<div class="services-box"> 
							<span class="box-title">Special Ideas</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni consequuntur.</p>
						</div>
					</div>
					<div class="item col-md-4">
						<!-- Change content from here -->
						<div class="services-box"> 
							<span class="box-title">Content Marketing</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni consequuntur.</p>
						</div>
					</div>
					<div class="item col-md-4">
						<div class="services-box"> 
							<span class="box-title">Providing Solutions</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas magni consequuntur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="projects">
	<div class="container">
		<div class="row">
			<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- change title-->
				<h2 class="gallery-title">
					<span class="left-line"></span> 
					{{ __('messages.projects_title') }}
					<span class="right-line"></span>
				</h2> 
			</div>
		</div>
		<div class="row">
			@foreach($projects as $index => $project)
			<div class="gallery_product col-lg-4 col-md-4 col-sm-12 col-xs-12 filter hdpe {{ ($index+1)%3==0?'thelast':''}}">
				<div class="gal-img">
					<div class="gal-hover">
						<div class="gal-text"> 
							<span>{{ $project->name }}</span>
							<br> <span>{{ $project->client_name }}</span> </div>
						<!-- change image here -->
					</div> 
					<img src="{{ Voyager::image( $project->thumbnail('medium')) }}" class="img-responsive" alt=""> 
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section id="news">
	<div class="container">
		<div class="row">
			<div class="services-title">
				<h2>
					<span class="left-line"></span> 
					{{ __('messages.news_title') }}
					<span class="right-line"></span>
				</h2>
			</div>
			<div class="services-item">
				<div class="row">
					@foreach($latestNews as $news)
					<div class="col-md-4 col-sm-6 col-xs-12 post__block">
						<a href="news/{{ $news->slug }}">
							<div class="post__image" style="background-image: url('{{ Voyager::image( $news->thumbnail('medium')) }}');"></div>
						</a>
						<div class="post__exerpt">
							<h4 class="post__exerpt-title">
								<a href="news/{{ $news->slug }}">
									{{ $news->title }}
								</a>
							</h4>
					        <div class="post__exerpt-text">{!! $news->excerpt !!}</div>
					        <a class="post__exerpt-date">{{ $news->created_at->formatLocalized('%d %B %Y') }}</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
