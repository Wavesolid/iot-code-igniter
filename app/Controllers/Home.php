<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'titlePage' => 'Home | Super Corp'
		];
		return view('LandingUI',$data);
	}
}
?>
