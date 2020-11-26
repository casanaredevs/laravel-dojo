<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DevController extends Controller
{
    public function getData(Request $request)
    {
    	return Response::json([
    		'data' => 600,
    		'status' => true,
    	]);
    }
}
