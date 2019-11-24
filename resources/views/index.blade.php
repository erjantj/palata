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
			<div class="block-title">
				<div class="block-heading">
					<span class="left-line"></span> 
					<h2>
						{{ $pageAbout->title }}
					</h2>
					<span class="right-line"></span>
				</div>
				<p class="para">{!! $pageAbout->excerpt !!}</p>
			</div>
			<div class="services-item">
				<a href="/membership" class="btn btn-primary">{{ __('messages.become_member') }}</a>
			</div>
		</div>
	</div>
</section>

<section id="projects">
	<div class="container">
		<div class="row">
			<div class="block-title">
				<div class="block-heading">
					<span class="left-line"></span> 
					<h2>
						{{ $pageLawyers->title }}
					</h2>
					<span class="right-line"></span>
				</div> 
				<p class="para">{!! $pageLawyers->excerpt !!}</p>
			</div>
		</div>
		<div class="row team-carousel projects-items">
			@include('lawyer/_lawyers', ['lawyersList' => $lawyersList])
		</div>
		<div class="row projects-button">
			<a href="/lawyers" class="btn btn-primary">{{ __('messages.see_list') }}</a>
		</div>
	</div>
</section>

<section id="news">
	<div class="container">
		<div class="row">
			<div class="block-title">
				<div class="block-heading">
					<span class="left-line"></span> 
					<h2>
						{{ __('messages.news_title') }}
					</h2>
					<span class="right-line"></span>
				</div>
			</div>
			<div class="services-item">
				<div class="row">
					@foreach($latestNews as $news)
					<div class="col-md-4 col-sm-6 col-xs-12 post__block">
						<a href="/news/{{ $news->slug }}">
							<div class="post__image" style="background-image: url('{{ Voyager::image( $news->thumbnail('medium')) }}');"></div>
						</a>
						<div class="post__exerpt">
							<h4 class="post__exerpt-title">
								<a href="/news/{{ $news->slug }}">
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
