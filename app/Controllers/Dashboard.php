<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

	public function index()
	{
		$data = [
            'title' => 'Dashboard | CCIT'
        ];
		return view('DashboardUI' ,$data);
	}
}
