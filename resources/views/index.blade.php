@extends('layouts.index')

@section('content')

<div class="slideshow">
	<div class="background">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				<!-- Change image from here -->	
					<div class="overlay-slider"></div> <img src="https://via.placeholder.com/1920x1080" alt="...">
					<div class="slider-text">
					<!-- Change content from here -->	
						<h3 class="">Business Consulting</h3>
						<p class=" para animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta quas magni voluptates, porro, voluptate sapiente vitae.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
