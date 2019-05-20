@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-header" style="color: #0e0c28;">Products</div>
			<div class="card-body">
				<table class="table table-hover">
				<thead style="text-align: center;">
					<th> Image </th>
					<th> Name </th>
					<th> Price </th>
					<th> Edit </th>
					<th> Delete </th>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr style="text-align: center;">
							<td> <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="40px" height="40px"> </td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->price }}</td>
							<td> 
								<a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-xs btn-outline-primary">
	                <i class="fas fa-fw fa-edit"></i>
	              </a>
	            </td>
							<td>
								<form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
	                  @csrf
	                  {{ method_field('DELETE') }}
	                  <button type="submit" class="btn btn-xs btn-outline-danger">
	                      <i class="fas fa-fw fa-trash"></i>
	                  </button>
	              </form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
@endsection