<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ElrosController extends Controller
{
    public function  index()
	{
	return view('post.index');	
}

public function create()
{
	
}
}