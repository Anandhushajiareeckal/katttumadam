@extends('layouts.frontend')
@section('body')
<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center"  style="background: url({{$banner->image}});filter: brightness(70%);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Gallery</h4>
					</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>Gallery</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



<!--==================================================-->
<!-- Start Royella Blog Area Home two-->
<!--==================================================-->
<div class="blog-area home-two">
	<div class="container">
		<div class="row">
            <div class="col-md-12 text-center">
				<div class="section-title center home-two" data-cue="zoomIn">
					<h4>Our Gallery</h4>
					<p class="section-desc-2 home-two">Immerse yourself in the beauty of Kattumadam mana through our stunning gallery.</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($gallery as $item )
				<div class="col-lg-4" style="padding-bottom: 20px;">
					<div class="single-place-box">
						<div class="place-thumb">
							<img  src="{{$item->image}}" alt="" style="height: 300px;">
							<div class="place-thumb-icon">
								<a class="place venobox vbox-item" data-gall="lace-imgs" href="{{$item->image}}"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div>
					</div>
				</div>	
			@endforeach                     
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Blog Area Home two-->
<!--==================================================-->
@endsection