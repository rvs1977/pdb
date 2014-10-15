<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="chosen/chosen.min.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="chosen/chosen.jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-sanitize.min.js"></script>
	
	<!-- AngularJS Start-->

 	 
	<script type="text/javascript" src="js/app.js"></script> 

	<link rel="stylesheet" href="js/login/pdb_login.css">
	<script type="text/javascript" src="js/login/pdb_login.js"></script>
	<script type="text/javascript" src="js/login/pdb_login_services.js"></script>

	<script type="text/javascript" src="js/pdb_chosen.js"></script>
	<script type="text/javascript" src="js/pdb_tabs.js"></script>
	
	<!-- AngularJS End-->

	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/redmond/jquery-ui.css">
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

	<title>Chosen + Tabs + AngularJS</title>

</head>
<body>
	<pdb-login></pdb-login>
	@if(Auth::check())
		<div ng-controller="CaseController">
			<!-- <pdb-add-tab-dialog></pdb-add-tab-dialog>	 -->
			<pdb-chosen></pdb-chosen>
			<pdb-tabs></pdb-tabs>	
		
		</div>
	@endif
	
	<script>
   	 	angular.module("myApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
	</script>
	
</body>
</html>