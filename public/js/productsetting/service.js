angular.module('psservice', [])
.factory('ProductSetting', function($http){
	var productsetting = {
		addProductSetting : function(filter){
			return $http({
				method : 'POST',
				url : '/productsettings',
				headers : {'Content-Type':'application/x-www-form-urlencoded'},
				data : $.param(filter)
			});
		}
	}
	return productsetting;
})