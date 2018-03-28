angular.module('psapp', ['controller', 'psservice']).config(function($interpolateProvider){
	$interpolateProvider.startSymbol('{%').endSymbol('%}');
});