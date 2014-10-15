<?php

class AccountController extends BaseController {

	public function postLogin()
	{
		$v = Validator::make(Input::all(), array(
			'email' => 'required | email',
			'password' => 'required'
		));

		if ($v->fails()) {
			
			$response['failed'] = $v->fails();
			$response['errors'] = $v->errors();

			return json_encode($response);
			// return "validation failed: " . $v->errors();
		} else {
			return "validation succeded";
		}

	}

}