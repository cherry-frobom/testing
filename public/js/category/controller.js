angular.module('mycontroller', ['myservice'])
.controller('myClient', function($scope, Category){
	$scope.form = {'name': '', 'description': ''};
	Category.getCategory(function(data, status){
		// alert(JSON.stringify(data.data.data));
		$scope.postlists = data.data.data;
	});
	$scope.newpost = function(){
		var filter = {
			'name': $scope.form.name,
			'description': $scope.form.description
		};
		Category.addCategory(filter).then(function(data){
			Category.getCategory(function(data, status){
			// alert(JSON.stringify(data.data.data));
				$scope.postlists = data.data.data;
			});
		});
	}
	$scope.getpost = function(){
		Category.getCategory(function(data, status){
			// alert(JSON.stringify(data.data.data));
			$scope.postlists = data.data.data;
		})
	}
})