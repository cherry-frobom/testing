angular.module('app', ['mycontroller', 'myservice']).config(function($interpolateProvider){
	$interpolateProvider.startSymbol('{%').endSymbol('%}');
});