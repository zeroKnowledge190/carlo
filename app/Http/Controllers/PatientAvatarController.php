<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Patient;
use Auth;
use Image;
use Session;

class PatientAvatarController extends Controller
{

    public function patient_avatar(Request $request, $id)
    {
		$patient = Patient::findOrFail($id);
		return view('/patient_avatar', compact('patient'));
    }

    public function update_patient_avatar(Request $request, $id){
			
		// Handles user upload of avatar 
		// Avatar and Naitional ID Pending 
		$this->validate($request, [
		
			'avatar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
		
		if($request->hasFile('avatar')) {
			
			$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));
		
			$patient->avatar = $filename;
			$patient->save();

    	}
    }
}