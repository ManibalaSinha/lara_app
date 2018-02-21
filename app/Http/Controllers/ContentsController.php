<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function home()
    {
    	$data = [];
    	$data['version'] = '0.1.2';
    	//add view to each method
    	//folder contents & method home
    	// pass the data to view
    	return view('contents/home', $data);
    }
}
