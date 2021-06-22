<?php

namespace App\Controllers;

class Login extends BaseController
{

	public function index()
	{
		$data = [
			'titlePage' => 'Login | Super Corp'
		];
		return view('LoginUI',$data);
	}
}
?>
