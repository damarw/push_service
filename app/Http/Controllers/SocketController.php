<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis as LRedis;

class SocketController extends Controller
{
    public function index()
    {
    	return view('socket');
    }
    public function store()
    {	$redis = LRedis::connection();
    	$redis->publish('message', 'gini lo');
    }
}
