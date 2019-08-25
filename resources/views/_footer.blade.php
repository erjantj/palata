<footer>
	<div class="container">
		<div class="row">
			<!-- change logo-->
			<div class="quick-info col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<a class="navbar-brand" href="/">
					<img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo">
				</a>
				<br>
				<!-- change description -->
				<p class="para">There are many variations of thes passages of Lorem Ipsum goole available, but the majority have enectus tellus senectus at Penatibus for team.</p>
			</div>

			<div class="quick-links col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h4>{!! __('messages.footer_quick_links') !!}</h4>
				{!! menu('main', '_footer_menu') !!}
			</div>

			<div class="events col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<h4>{!! __('messages.footer_news') !!}</h4>
				@foreach($latestNews as $news)
				<div>
					<a href="/news/{{ $news->slug }}">
						<span>{{ $news->created_at->formatLocalized('%d %B %Y') }}</span>
						<p>{{ $news->title }}</p>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</footer>