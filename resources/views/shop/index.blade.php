@extends('layouts.app')

@section('content')
	<div class="row">
		@foreach($shops as $shopValue)
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card">
				<img src="{{ asset($shopValue->imagePath) }}" alt="{{ $shopValue->title }}" width="100px" height="150px" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"> {{ $shopValue->title }} </h3>
					<p> {{ $shopValue->description }} </p>
					<p>
						<span class="float-left" style="font-weight: 600;">$ {{ $shopValue->price }}</span>
						<a href="{{ route('shop.addToCart', ['id' => $shopValue->id]) }}" class="btn btn-xs btn-outline-primary float-right">Add to cart</a>
					</p>
				</div>
			</div>
		</div>
		@endforeach
		{{-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card">
				<img src="https://cdn.motor1.com/images/mgl/9wpLb/s4/audi-pb-18-e-tron.jpg" width="100px" height="150px" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"> Product Title 2 </h3>
					<p> This is a longer card with supporting text below as a natural lead-in to additional content. </p>
					<p>
						<span class="float-left" style="font-weight: 600;">$18</span>
						<a href="#" class="btn btn-xs btn-outline-primary float-right" style="float: right;">Add to cart</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card">
				<img src="https://cdn.motor1.com/images/mgl/Wrp6g/s3/2015-audi-r8-e-tron.jpg" width="100px" height="150px" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"> Product Title 3 </h3>
					<p> This is a longer card with supporting text below as a natural lead-in to additional content. </p>
					<p>
						<span class="float-left" style="font-weight: 600;">$25</span>
						<a href="#" class="btn btn-xs btn-outline-primary float-right" style="float: right;">Add to cart</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card">
				<img src="https://www.engineering.com/Portals/0/BlogFiles/DesignerEdge/Photo%20of%20the%20DAy/dezeen_Audi-at-CES-2013_2.jpg" width="100px" height="150px" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"> Product Title 4 </h3>
					<p> This is a longer card with supporting text below as a natural lead-in to additional content. </p>
					<p>
						<span class="float-left" style="font-weight: 600;">$29</span>
						<a href="#" class="btn btn-xs btn-outline-primary float-right" style="float: right;">Add to cart</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card">
				<img src="https://cdn.vox-cdn.com/thumbor/qO1EWSlg7VkrRm6dsZPT8k1qvLk=/0x0:3508x2481/1200x800/filters:focal(1474x961:2034x1521)/cdn.vox-cdn.com/uploads/chorus_image/image/59319583/A182669_medium.0.jpg" width="100px" height="150px" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"> Product Title 5 </h3>
					<p> This is a longer card with supporting text below as a natural lead-in to additional content. </p>
					<p>
						<span class="float-left" style="font-weight: 600;">$14</span>
						<a href="#" class="btn btn-xs btn-outline-primary float-right" style="float: right;">Add to cart</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="card">
				<img src="https://www.engineering.com/Portals/0/BlogFiles/DesignerEdge/Photo%20of%20the%20DAy/dezeen_Audi-at-CES-2013_2.jpg" width="100px" height="150px" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"> Product Title 6 </h3>
					<p> This is a longer card with supporting text below as a natural lead-in to additional content. </p>
					<p>
						<span class="float-left" style="font-weight: 600;">$29</span>
						<a href="#" class="btn btn-xs btn-outline-primary float-right" style="float: right;">Add to cart</a>
					</p>
				</div>
			</div>
		</div> --}}
	</div>
@endsection