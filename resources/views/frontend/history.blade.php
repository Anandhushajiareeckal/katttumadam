@extends('layouts.frontend')
@section('body')
<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center" style="background: url({{$banner->image}});filter: brightness(70%);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>History</h4>
					</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>History </li>
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
<!-- Start Royella service Details Area -->
<!--==================================================-->
<div class="service-details">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			    <div class="service-details-thumb">
			    	<img src="{{$history->image}}" alt="">
			    </div>
			</div>
			<div class="col-lg-4">
				<div class="widget-categories-box">
					<div class="categories_title" data-cue="zoomIn">
						<h4>Events </h4>
					</div>
					@foreach ($event as $item)
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
		<div class="row">
			<div class="col-lg-12">
				<div class="service-details-content">
					<div class="services-details-title-box">
						<h1>{{$history->heading}}</h1>
						<p class="magnahu"  data-cue="zoomIn">{{$history->description}}</p>
					</div>					
					{!!$history->content!!}
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella service Details Area -->
<!--==================================================-->




@endsection