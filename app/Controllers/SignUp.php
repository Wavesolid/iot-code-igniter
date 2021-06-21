<?php

namespace App\Controllers;

class SignUp extends BaseController
{

	public function index()
	{
		$data = [
			'titlePage' => 'Sign Up | Super Corp'
		];
		return view('SignUp',$data);
	}
}
?>
