<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

	Route::get('/', function()
	{
		return View::make('home');
	});

Route::group(array('before' => 'headerCSRF'), function(){
	
	Route::group(array('prefix' => 'login'), function(){

		Route::get('pdb-login', function(){
			return View::make('pdb.login.ng_login');
		});
		
		Route::post('post-login', array(
			'uses' => 'AccountController@postLogin'
		));		
	});


	Route::get('pdb-chosen', function(){
		return View::make('pdb.chosen.ng_chosen');
	});

	Route::get('pdb-tabs', function(){
		return View::make('pdb.tabs.ng_tabs');
	});

	Route::get('get-cases', function(){
		
		$myarr = [
			['db_id' => 1, 'name' => 'Casename 1'],
			['db_id' => 2, 'name' => 'Casename 2'],
			['db_id' => 3, 'name' => 'Casename 3'],
		];

		return json_encode($myarr);
	});

	Route::get('get-selected-case', function(){

		$case_db_id = Input::get('case_db_id');

		$case = [];

		switch ($case_db_id) {
			case '1':
				$case = [
					['ses_tab_id' => 1, 'tabname' => 'JO&BE'],
					['ses_tab_id' => 2, 'tabname' => 'MU'],
					['ses_tab_id' => 3, 'tabname' => 'TØ'],
					['ses_tab_id' => 4, 'tabname' => 'MA'],
					['ses_tab_id' => 5, 'tabname' => 'VVS'],
				];
				break;

			case '2':
				$case = [
					['ses_tab_id' => 1, 'tabname' => 'TAB 1'],
					['ses_tab_id' => 2, 'tabname' => 'TAB 2'],
				];
				break;

			case '3':
				$case = [
					['ses_tab_id' => 1, 'tabname' => 'xTAB 1'],
					['ses_tab_id' => 2, 'tabname' => 'xTAB 2'],
					['ses_tab_id' => 3, 'tabname' => 'xTAB 3'],
				];
				break;		
			
		}
		return json_encode($case);
	});


}); // Route::group(array('before' => 'headerCSRF')