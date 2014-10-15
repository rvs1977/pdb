(function(){

	var app = angular.module('pdbChosen', []);

	app.directive('pdbChosen', function(){
		return {
			restrict: 'E',
			templateUrl: 'pdb-chosen'
		}
	});

	app.directive('pdbChosenA', function(){
		var linker = function(scope, element, attr) {

			scope.$watch('casesList', function(){
				element.trigger('chosen:updated');
			});

			element.chosen();
		};

		return {
			restrict: 'A',
			link: linker
		}
	});

			
	
})();