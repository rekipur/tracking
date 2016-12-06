<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class test extends Controller
{
    public function tampil()
    {
    	# code...
    	$posts = User::all();
    	return view('belajarpostingandatabase',['users'=>'$posts']);
    }
}
