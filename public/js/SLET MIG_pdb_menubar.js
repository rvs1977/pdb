(function(){
	var app = angular.module('pdbLogin', []);

	app.directive('pdbLogin', function(){
		return {
			restrict: 'E',
			templateUrl: 'pdb-menubar'
		}
	});

	app.directive('pdbLoginA', function(){
		return {
			restrict: 'A',
			link: function(scope, element, attrs){

				$('#login_form').on('click', function(){
					console.log('login bar clicked');
				});

			}
		}
	});

})();