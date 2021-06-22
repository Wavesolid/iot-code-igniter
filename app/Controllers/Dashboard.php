<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

	public function index()
	{
		$data = [
            'title' => 'Home | Super Corp'
        ];
		return view('DashboardUI' ,$data);
	}
}
