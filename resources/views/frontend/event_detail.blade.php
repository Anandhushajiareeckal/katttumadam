@extends('layouts.frontend')
@section('body')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center" style="background: url({{$banner->image}});  background-repeat: no-repeat;
    filter: brightness(70%);
    background-size: cover;
    background-position: center center;
    padding: 260px 0 170px;
    text-align: center;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Event Details</h4>
					</div>
					<ul>
						<li><a href="/">Home</a></li>
						<li>/</li>
						<li>Event Details</li>
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
<!-- Start Royella Room Details Area -->
<!--==================================================-->
<div class="room-details">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="room-details-list owl-carousel">
					    <div class="col-lg-12">
					    	<div class="room-detils-thumb">
					    		<img src="{{$event->image}}" alt="">
					    	</div>
					    </div>							   
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="room-details-content">
							<h1>{{$event->heading}}</h1><br><br>
							<p class="room-detils-desc" data-cue="zoomIn">{!!$event->description!!}</p>
						</div>
					</div>
				</div>
			</div>
            
			<div class="col-lg-4">
				<div class="row">
				<div class="widget-categories-box">
					<div class="categories_title" data-cue="zoomIn">
						<h4>Events </h4>
					</div>
					@foreach ($events as $item)
						<div class="sidber-widget-recent-post" data-cue="zoomIn">
							<div class="recent-widget-thumb">
								<img src="{{$item->image}}" alt="" style="width:100px;"> 
							</div>
							<div class="recent-widget-content">
								<a href="/event/detail/{{$item->id}}">{{$item->heading}}</a>	
							</div>
						</div>
					@endforeach
				</div>	
			</div>
			</div>
            {!!$event->content!!}

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Room Details Area -->
<!--==================================================-->








@endsection