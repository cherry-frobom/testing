angular.module('controller', ['psservice'])
.controller('pscontroller', function($scope, ProductSetting){
	$scope.form = {'setting_name': '', 'type' : '', 'order_no' : ''};
$scope.serverValidations = 'hello';
	$scope.newpost = function(){
		var filter = {
			'setting_name' : $scope.form.setting_name,
			'type' : $scope.form.type,
			'order_no' : $scope.form.order_no
		};
		ProductSetting.addProductSetting(filter).then(function(data){

		},function(error){
			$scope.errors = error.data.errors;
		});
	}
})