<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Welcome to Super Corp'
		];
		
		return view('LandingUI',$data);
	}
}
?>
