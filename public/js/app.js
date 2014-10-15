(function(){
	var app = angular.module('myApp', ['pdbLogin', 'pdbChosen', 'pdbTabs', 'ngSanitize']);

	/*app.run(function($http, CSRF_TOKEN){
		console.log('app.js CSRF_TOKEN: ' + CSRF_TOKEN);
	});*/

	app.controller('CaseController', function($scope, $http){

		$scope.casesList = [];
		$scope.activeCase = [];

		$scope.getCases = function() {
			$http.get('get-cases').then(function(result){
				$scope.casesList = result.data;
			});
		}
		$scope.getCases();

		// views\pdb\chosen\ng_chosen.blade.php - ng-change="getSelectedCase"
		$scope.getSelectedCase = function(){
			$http.get('get-selected-case', {params: {case_db_id : $scope.selected_case.db_id}})
				.then(function(result){
					$scope.activeCase = result.data;
				});
		} // $scope.getSelectedCase
	});	// app.controller('CaseController')	

	app.run(function($http, CSRF_TOKEN){
		// console.log('app.js - app.run - CSRF_TOKEN: ' + CSRF_TOKEN);
		$http.defaults.headers.common['pdbtoken'] = CSRF_TOKEN;
	});
})();
		
