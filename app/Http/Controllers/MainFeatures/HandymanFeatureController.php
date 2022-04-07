<?php

namespace App\Http\Controllers\MainFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class HandymanFeatureController extends Controller
{
    public function index()
    { 
        $handymanFeature = User::getHandyman();
            return view('main_features.handyman_services', [
                'handymans' => $handymanFeature
        ]);
    }
}
