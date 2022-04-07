<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\User;
use App\Models\UserExperiences;
use Auth;

class UserExperienceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
            return view('auth.msr_experience', [
            'userData' => $user    
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeExperiences(Request $request)
    {
        $user_experiences = new UserExperiences;
        $user_experiences->exp_id_no = mt_rand(100000, 999999);
        $user_experiences->spock_id_no = Auth::user()->user_id_no;
        $user_experiences->job_title = $request->jobTitle;
        $user_experiences->year_from = $request->yearFrom;
        $user_experiences->year_to = $request->yearTo;
        $user_experiences->company_name = $request->companyName;
        $user_experiences->product_handled = $request->productHandled;
        $user_experiences->product_type = $request->productCategory;    
        $user_experiences->save();
    }

    public function showExperiences()
    {
        $authUser = Auth::user();
        $experiences = UserExperiences::select('id', 'job_title', 'year_from', 'year_to', 'company_name', 'product_handled')->where('spock_id_no', $authUser->user_id_no)->paginate(5);
            return view('auth.show_experiences', [
                'experiences' => $experiences 
        ]);

    }
}
