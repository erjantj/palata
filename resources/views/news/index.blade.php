@extends('layouts.main')

@section('title', $page->title)

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
  	<h1>{{ $page->title }}</h1>
  </div>
  <div class="col-md-12 col-xs-12">
    <div class="row">
    @foreach ($newsList as $index => $news)
    	@if ($index%4 == 0)
    		<div class="col-md-12 col-sm-12 col-xs-12 post__block post__block--big">
    			<div class="row">
		    		<div class="col-md-7 col-sm-7 col-xs-12">
						<a href="/news/{{ $news->slug }}">
							<div class="post__image post__image--big" style="background-image: url('{{ Voyager::image( $news->image) }}');"></div>
						</a>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 post__block">
						<div class="post__exerpt">
							<h4 class="post__exerpt-title post__exerpt-title--big">
								<a href="news/{{ $news->slug }}">
									{{ $news->title }}
								</a>
							</h4>
					        <div class="post__exerpt-text">{!! $news->excerpt !!}</div>
					        <a class="post__exerpt-date">{{ $news->created_at->formatLocalized('%d %B %Y') }}</a>
						</div>
					</div>
				</div>
			</div>
    	@else
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
		@endif
    @endforeach
	</div>
  </div>
  <div class="row">
  	<div class="col-md-12 col-xs-12 text-center">
  		{{ $newsList->links('_pagination') }}
	</div>
  </div>
</div>
@endsection
