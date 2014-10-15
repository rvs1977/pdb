(function(){
	var app = angular.module('pdbTabs', []);

	app.directive('pdbTabs', function(){
		return {
			restrict: 'E',
			templateUrl: 'pdb-tabs'
		}
	});

	app.directive('pdbTabsA', function(){
		var linker = function(scope, element, attrs) {
			var tabs = element.tabs();

			tabs.find('.ui-tabs-nav')
		            	.sortable({
		            		axis:'x',
		            		stop: function () {
		            			var serialize_var = $("#ul_tabs").sortable('serialize');							
								
		            		},
		            	});	

			// tabs.tabs('refresh');

			scope.$watch('activeCase', function(){
				scope.$evalAsync(function(){
					tabs.tabs('refresh');
				});						
			});


		}

		return {
			restrict: 'A',
			link: linker
		}
	});

	app.directive('pdbAddTabDialogA', function(){
		return {
			restrict: 'A',
			link: function(scope, element, attrs){
				var dialog = element.dialog({
					  autoOpen: false,
				      modal: true,
				      show: {effect: 'fold'}, 
     		 		  hide: {effect: 'fold'},
				      buttons: {
				        Add: function() {
				          scope.addTab();
				          $( this ).dialog( "close" );
				        },
				        Cancel: function() {
				          $( this ).dialog( "close" );
				        }
				      },

				      close: function() {
				        form[ 0 ].reset();
				      }
				});

				var form = dialog.find( "form" ).submit(function( event ) {
			      // addTab();
			      dialog.dialog( "close" );
			      event.preventDefault();
			    });

			    $('#add_tab_btn').on('click', function () {
					dialog.dialog( "open" );
				})
				
			} // link
		} // return
	}); // app.directive('pdbAddTabDialogA')

	app.controller('dialogController', function($scope){
		$scope.addTab = function() {
			$scope.activeCase.push({ses_tab_id: $scope.activeCase.length + 1, tabname: $scope.new_tabname});
					
			$scope.$apply();
			$('#tabs').tabs('refresh');
		
		} // addTab - function
	}); // app.controller('dialogController'


})();