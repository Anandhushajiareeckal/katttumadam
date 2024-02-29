@extends('layouts.frontend')
@section('body')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center" style="background: url({{$banner->image}});  background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 260px 0 170px;
    text-align: center;
    filter: brightness(70%);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Events </h4>
					</div>
					<ul>
						<li><a href="/">Home</a></li>
						<li>/</li>
						<li>Events </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Breadcumb Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Royella Room Area -->
<!--==================================================-->
<div class="room-area inner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center inner" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Events</h1>
					<p class="section-desc-1">See our latest news and events here</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center">

            @for ($i=0;$i<count($event);$i++)
            @php $item = $event[$i] @endphp
            
		    <div class="col-lg-4 col-md-6">
				<div class="room-single-box" data-cue="zoomIn">
					<div class="room-thumb">
						<img src="{{$item->image}}" alt="">
						<div class="room-details-button">
							<a href="{{route('event_detail',['id'=>$item->id])}}">View Details<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
                    <div class="room-content">
                    	<a href="/event/detail/{{$item->id}}">{{$item->heading}}</a>
                    	<p>{{ substr($item->description, 0, 130) }}</p>
                    </div>
                    
				</div>
			</div>			
			
            @endfor

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Room Area -->
<!--==================================================-->

@endsection