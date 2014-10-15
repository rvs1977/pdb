<div id="tabs" pdb-tabs-a>
	<ul id="ul_tabs">
		<li><a href="#frontpage">Forside</a></li>
		
		<li ng-repeat="tab in activeCase" aria-controls="tabs-@{{tab.ses_tab_id}}" aria-labelledby="ui-id-@{{tab.ses_tab_id}}">
			<a id="ui-id-@{{tab.ses_tab_id}}" href="#tabs-@{{tab.ses_tab_id}}"
				>@{{tab.ses_tab_id}}. @{{tab.tabname}}
			</a>
		</li>

		<li id="add_tab_btn"><a href="#add_tab">+</a></li>
	</ul>

	<div id="tab_content">
		<div id="frontpage">content of frontpage</div>

		<div ng-repeat="tab in activeCase" id="tabs-@{{tab.ses_tab_id}}" aria-labelledby="ui-id-@{{tab.ses_tab_id}}">
			<p>Content of @{{tab.tabname}}</p>
    		<input type="text" ng-model="tab.tabname">
	    </div>

	    <div id="add_tab"></div>
	</div>
</div>

<!-- Add tab dialog -->
<div pdb-add-tab-dialog-a ng-controller="dialogController" id="add_tab_dialog" title="{{Lang::get('pdb_msg.title_dialog')}}">
  	<!-- <form> -->
  	{{Form::open()}}
	    <fieldset class="ui-helper-reset">
	      	<label for="tab_title">{{Lang::get('pdb_msg.trade_dialog').': '}}</label>
	      	<div style="color:grey; font-size:0.8em; font-style:italic;">("{{ Lang::get('pdb_msg.eg_MA_dialog')}}" )</div>
	      	<input ng-click="" type="text" ng-model="new_tabname" name="tab_title" id="tab_title" value="" class="ui-widget-content ui-corner-all">
			<div id="tab_title_err" style="color:red; font-size:0.8em; font-style:italic;"></div>

			<br><br>

	      	<label for="tab_contractName">{{Lang::get('pdb_msg.contract_name_dialog').': '}}</label>
	      	<div style="color:grey; font-size:0.8em; font-style:italic;">({{Lang::get('pdb_msg.eg_Mason_Contract_dialog')}} )</div>
	      	<input name="tab_contractName" class="ui-widget-content ui-corner-all" ></textarea>
	    	<div id="tab_contractName_err" style="color:red; font-size:0.8em; font-style:italic;"></div>
	    </fieldset>
 	<!-- </form> -->
 	{{Form::close()}}
</div>
