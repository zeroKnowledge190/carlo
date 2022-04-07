<?php

namespace App\Http\Controllers;

use Auth;
use Exception;
use Illuminate\Http\Request;

class FullpageController extends Controller
{
    public function index(Request $request)
    {
        try {
            return view('hopperjang.index', array('user' => Auth::user()));
        } catch (\Exception $e) {
            return view('bt_errors.main_content_error', [
                'bt_errors' => $e->getMessage()
            ]);
		}
    }
    
    public function guidelines()
    {
        try {
            return view('hopperjang.guidelines');
        } catch (\Exception $e) {
            return view('bt_errors.main_content_error', [
                'bt_errors' => $e->getMessage()
            ]);
        }
    }
}
