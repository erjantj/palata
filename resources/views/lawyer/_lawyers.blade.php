@foreach ($lawyersList as $lawyer)
<div class="col-md-4 col-xs-12 owl-theme owl-one">
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
