<!-- <p class="container"> -->

<br>
<p>
	<select pdb-chosen-a data-placeholder="{{ Lang::get('pdb_msg.choose_a_case') }}" class="chosen-select" style="width:350px;"
		ng-model="selected_case" ng-change="getSelectedCase()" ng-options="case.name for case in casesList">
		<option value=""></option>
	</select>	
</p>