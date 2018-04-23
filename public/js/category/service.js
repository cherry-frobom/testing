angular.module('myservice', [])
.factory('Category', function($http){
	var category = {
		addCategory : function(filter){
			return $http({
				method:'POST',
				url:'/category',
				headers:{'Content-Type':'application/x-www-form-urlencoded'},
				data: $.param(filter)
			});
		},
		getCategory : function(callback){
			$http.get('/category').then(function(data, status){
				callback(data);
			});
		}
	}
	return category;
})