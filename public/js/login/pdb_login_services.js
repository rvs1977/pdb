(function(){
	angular.module('myApp')
	 	.factory('Authenticate', function($http){
	 		return {
	 			login: function(credentials){

	 				return $http.post('login/post-login', credentials);
	 					// .success(function(response){
	 					// 	return "console.log('Factory - response from server: ' + response)";
	 					// });
	 			}
	 		}
	 	});
})();