(function(){
	var app = angular.module('pdbAddTabDialog', []);

	app.directive('pdbAddTabDialog', function(){
		return {
			restrict: 'E',
			templateUrl: 'pdb-addtab-dialog'
		}
	});

	app.directive('pdbAddTabDialogA', function(){
		

		return {
			restrict: 'A',
			link: function(scope, element, attrs) {
				var dialog = element.dialog({
					  autoOpen: false,
				      modal: true,
				      buttons: {
				        Add: function() {
				          // addTab();
				          
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
			      addTab();
			      dialog.dialog( "close" );
			      event.preventDefault();
			    });

			    $('#add_tab_btn').on('click', function () {
					dialog.dialog( "open" );
				});



			} // link		
				function addTab() {
				    scope.activeCase.push({ses_tab_id: scope.activeCase.length + 1, tabname: scope.new_tabname});
						angular.element(document).ready(function () { 
							$('#tabs').tabs('refresh');
							// $('.init_hide').removeClass('init_hide');
						});

					scope.$apply();
			    }
		}
	});
})();