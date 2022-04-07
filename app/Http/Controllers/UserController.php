<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator;
use Auth;
use Image;
use Session;

class UserController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function full_profile()
	{	
		return view('full_profile', array('user' => Auth::user()));	
	}
	
	public function profile()
	{	
		return view('profile', array('user' => Auth::user()));	
	}

	public function dashboard()
	{
		return view('reddrop_back.index', array('user' => Auth::user()));
	}

	public function goToChangeAvatar()
	{
		return view('auth.change_avatar', array('user' => Auth::user()));
	} 
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function update_avatar(Request $request) 
	{ 
		$validation = Validator::make($request->all(), [
			'avatar' => 'required|image|mimes:jpeg,png,jpg|max:3048'
		]);
		
		if ($validation->passes()){

		if ($request->hasFile('avatar')) {
			$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(360,360)->save(public_path('/uploads/avatars/' . $filename));
			
			$user = Auth::user();
			$user->avatar = $filename;
			$user->save();
			
			Session::flash('success', 'Profile picture was changed');
			}
			return response()->json(['errorStatus' => 0]);
		} else {
            return response()->json(['errorStatus' => 1]);
		}
	}
	
	public function edit_profile(User $user)
    {   
		$user = Auth::user();
		// $getUserData = User::where('id', $user->id)->first(); 
        return view('auth.edit_profile', [
			'userData' => $user
		]);
    }

    public function update_user(User $user)
    { 
		$user = Auth::user();
		// $user->user_id_no = request('user_id_no');
		// $user->spock_id_no = request('spock_id_no');
		$user->account_type = request('account_type');
        $user->firstName = request('firstName');
		$user->lastName = request('lastName');
		$user->middleName = request('middleName');
		$user->suffix = request('suffix');
		$user->gender = request('gender');
		$user->birthmonth = request('birthMonth');
		$user->birthday = request('birthDay');
		$user->birthyear = request('birthYear');
		$user->age = request('age');
		$user->mobile_no = request('mobileNumber');
		$user->user_level = request('userLevel');
		$user->user_status = request('userStatus');
		$user->street = request('streetVal');
		$user->village = request('villageVal');
		$user->city = request('cityVal');
		$user->province = request('provinceVal');
		$user->account_type = request('accountTypeVal');
		$user->company_name = request('companyVal');
		$user->industry = request('getIndustry');
		$user->skills = request('getSkill');
		$user->point_of_origin = request('getOrigin');
		$user->save();
	
		Session::flash('success', 'Personal Information was updated');
    }
	
	public function editUsernamePassword(User $user)
    {   
        $user = Auth::user();
        return view('auth.edit_username_password',[
			'userData' => $user
		]);
	}
	
	public function saveUpdatedUsernamePassword(User $user)
    {   
		$user = Auth::user();
		$user->email = request('email');
		$user->password = bcrypt(request('passWord'));
		$user->save();
		// Session::flash('success', 'Login credentials were updated');
    }
}