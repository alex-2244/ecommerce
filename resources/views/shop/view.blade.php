@extends('layouts.app')

@section('content')
	@if (Session::has('cart'))
		
		<div class="row">
			@foreach ($shops as $item)
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header">All Carts</div>
					<div class="card-body">
						<table class="table tabl-hover">
							<thead>
								<th>Title</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Actions</th>
							</thead>
							<tbody>
								<td> {{ $item['item']['title'] }} </td>
								<td> {{ $item['qty'] }} </td>
								<td> {{ $item['price'] }} </td>
								<td> 
									<div class="btn-group">
										<button class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">Reduce by 1</a></li>
											<li><a href="#">Reduce by All</a></li>
										</ul>
									</div>
								</td>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	@else
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">No items in cart</h3>
					</div>
				</div>
			</div>
		</div>			
	@endif
@endsection