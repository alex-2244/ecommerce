@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header" style="color: #0e0c28;">Create Products</div>
		<div class="card-body">
			<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" value="{{ old('name') }}"> 
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="number" name="price" class="form-control" value="{{ old('price') }}"> 
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" name="image" class="form-control"> 
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" id="description" rows="5" cols="10" class="form-control"> {{ old('description') }} </textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-sm btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
@endsection