<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body ng-app="psapp" ng-controller="pscontroller">
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
	<form>
		<div>
			<div class="row" ng-class="{'has-error':errors.setting_name }">
				<div class="col-md-6">
					<div class="md-form">
						<label for="setting_name" class="">Setting Name</label>
						<input type="text" name="setting_name" class="form-control" ng-model="form.setting_name">
						<span class="text-danger">{%errors.setting_name[0]%}</span>
					</div>
				</div>
			</div>
			<div class="row" ng-class="{'has-error':errors.type }">
				<div class="col-md-6">
					<div class="md-form">
						<label for="type" class="">type</label>
						<select class="form-control" name="type" ng-model="form.type">
							<option>Color</option>
							<option>Size</option>
						</select>
						<span class="text-danger">{%errors.type[0]%}</span>
					</div>
				</div>
			</div>
			<div class="row" ng-class="{'has-error':errors.order_no }">
				<div class="col-md-6">
					<div class="md-form">
						<label for="order_no" class="">Order No</label>
						<input type="text" name="order_no" class="form-control" ng-model="form.order_no">
						<span class="text-danger">{%errors.order_no[0]%}</span>
					</div>
				</div>
			</div>
		</div>
		<div class="center-on-small-only">
			<button type="submit" class="btn btn-sm btn-primary" ng-click="newpost()">Submit</button>
		</div>
	</form>
	<!-- <form action="{{ route('productsettings.store') }}" method="POST"> -->
		<!-- CSRF Token -->
		<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div>
			<div class="row {{ $errors->first('setting_name', 'has-error') }}">
				<div class="col-md-6">
					<div class="md-form">
						<label for="setting_name" class="">Setting Name</label>
						<input type="text" name="setting_name" class="form-control" value="{!! old('setting_name') !!}">
						{!! $errors->first('setting_name', '<span class="help-block">:message</span>') !!}

					</div>
				</div>
			</div>
			<div class="row {{ $errors->first('type', 'has-error') }}">
				<div class="col-md-6">
					<div class="md-form">
						<label for="type" class="">type</label>
						{{Form::select('type', array('1' => 'Color', '2' => 'Size'), null, ['class' => 'form-control'])}}
						{!! $errors->first('type', '<span class="help-block">:message</span>') !!}
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
			</div>
		</div>
		<div class="center-on-small-only">
			<button type="submit" class="btn btn-sm btn-primary">Submit</button>
		</div> -->
	<!-- </form> -->
</div>

</div>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/angular.js')}}"></script>
<script type="text/javascript" src="{{asset('js/productsetting/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/productsetting/controller.js')}}"></script>
<script type="text/javascript" src="{{asset('js/productsetting/service.js')}}"></script>
</body>
</html>