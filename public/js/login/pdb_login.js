(function(){
	var app = angular.module('pdbLogin', ['ngSanitize']);

	app.directive('pdbLogin', function(){
		return {
			restrict: 'E',
			templateUrl: 'login/pdb-login'
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

	app.controller('loginController', function($scope, Authenticate){
		
		$scope.flash_email = '';
		$scope.flash_password = '';

		$scope.login = function(){

			$scope.flash_email = '';
			$scope.flash_password = '';

			if (!$scope.inputRememberme) {
				$scope.inputRememberme = false;
			};

			Authenticate.login({
				"email" : $scope.inputEmail,
				"password" : $scope.inputPassword,
				"rememberme" : $scope.inputRememberme
			}).success(function(validation){
				
				if (validation.failed) {
					if (validation.errors.email) {
						$scope.flash_email = validation.errors.email;
					};

					if (validation.errors.password) {
						$scope.flash_password = validation.errors.password;
					};
				} else {
					console.log('validation success');
				};


				


				// console.log('success - err:'  + validation.errors.password);


			}).error(function(){
				console.log('something went wrong')
			});
		}
	});

})();