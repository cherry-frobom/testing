<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body ng-app="app" ng-controller="myClient">
	<form>
		<label>Name</label>
		<input type="text" name="name" ng-model="form.name">
		<br>
		<label>Description</label>
		<textarea name="description" ng-model="form.description"></textarea>
		<button type="button" ng-click="newpost()">Submit</button>
	</form>
	<button type="button" ng-click="getpost()">postList</button>
	<table>
		<thead></thead>
		<tbody>
			<tr ng-repeat="postlist in postlists">
				<td>{%postlist.name%}</td>
				<td>{%postlist.description%}</td>
			</tr>
		</tbody>
	</table>
</body>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/angular.js')}}"></script>
<script type="text/javascript" src="{{asset('js/category/client.js')}}"></script>
<script type="text/javascript" src="{{asset('js/category/controller.js')}}"></script>
<script type="text/javascript" src="{{asset('js/category/service.js')}}"></script>
</html>