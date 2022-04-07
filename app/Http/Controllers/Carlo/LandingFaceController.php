<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator;
use Auth;
use Image;
use Session;

class LandingFaceController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function landingPage()
	{	
		// return view('carlo_web.carlo_page', array('user' => Auth::user()));	
        return view('carlo_web.carlo_page',[
            'userFullName' => Auth::user()->full_name
        ]);	
	}

    public function landingFirst()
	{	
		// return view('carlo_web.carlo_page', array('user' => Auth::user()));	
        return view('carlo_web.loginFirst');
	}
	
}