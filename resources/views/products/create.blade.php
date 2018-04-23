<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<!-- <nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ url('products') }}">Product Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ url('products') }}">View All Products</a></li>
		<li><a href="{{ url('products/create') }}">Create a Product</a>
	</ul>
</nav> -->

<h3 class="text-primary">Create</h3>

<!-- if there are creation errors, they will show here -->

<div class="box animation flipInX">
	<!-- Notifications -->
	<div id="notific">
	@include('notifications')
	</div>
	<form action="{{ route('products.store') }}" method="POST">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div>
			<div class="row {{ $errors->first('product_code', 'has-error') }}">
				<div class="col-md-6">
					<div class="md-form">
						<label for="product_code" class="">Product Code</label>
						<input type="text" name="product_code" class="form-control" value="{!! old('product_code') !!}">
						{!! $errors->first('product_code', '<span class="help-block">:message</span>') !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="name" class="">Name</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="price" class="">Price</label>
						<input type="text" name="price" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="category">Category</label>
						{{Form::select('category', array('L' => 'Large', 'S' => 'Small'), null, ['class' => 'form-control'])}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="description" class="">Description</label>
						<textarea class="form-control" name="description"></textarea>
					</div>
				</div>
			</div>
<!-- 			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="setting_name" class="">Setting Name</label>
						<input type="text" name="setting_name" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="type" class="">type</label>
						{{Form::select('type', array('1' => 'Large', '2' => 'Small'), null, ['class' => 'form-control'])}}
					</div>
				</div>
			</div>
			<div class="row {{ $errors->first('order_no', 'has-error') }}">
				<div class="col-md-6">
					<div class="md-form">
						<label for="order_no" class="">Order No</label>
						<input type="text" name="order_no" class="form-control">
						{!! $errors->first('order_no', '<span class="help-block">:message</span>') !!}

					</div>
				</div>
			</div> -->
			@foreach ($productSettings as $name)
			<div class="row">
				<div class="col-md-6">
					<div class="md-form">
						<label for="{{$name->setting_name}}" class="">{{$name->setting_name}}</label>
						<input type="text" name="ppsvalue[]" class="form-control">
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="center-on-small-only">
			<button type="submit" class="btn btn-sm btn-primary">Submit</button>
		</div>
	</form>
</div>

</div>
</body>
</html>