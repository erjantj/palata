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
				<p class="para">{{ setting('site.description') }}</p>
			</div>

			<div class="quick-links col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h4>{!! __('messages.footer_quick_links') !!}</h4>
				{!! menu('main', '_footer_menu') !!}
			</div>
		</div>
	</div>
</footer>