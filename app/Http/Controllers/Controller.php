<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use DB;
use App\Quotation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // Function to display data

    function getData() {
    	$data['data'] = DB::table('film')->get();

    	if (count($data) > 0) {
    		return view('search', $data);
    	} else {
    		return view('search');
    	}
    }
}
