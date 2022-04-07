<?php

namespace App\Http\Controllers\ServiceDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BtServiceDetails;
use Auth;
use Validator;
use Image;
use Session;
use Paginate;

class BtServiceDetailsController extends Controller
{
    public function createPage()
    {
        $user = Auth::user();
            return view('service_details.create_service_details', [
            'userData' => $user    
        ]);
    }

    public function editPage(Request $request)
    {
        $serviceDetails = BtServiceDetails::where('sd_id_no', $request->id)->first();
            return view('service_details.edit_service_details', [
            'serviceData' => $serviceDetails
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createServiceDetails(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'service_avatar' => 'required|image|mimes:jpeg,png,jpg|max:3048'
        ]);

        $btServiceDetails = new BtServiceDetails;
        $btServiceDetails->sd_id_no = mt_rand(100000, 999999);
        $btServiceDetails->bt_id_no = $request->bt_id_no;
        $btServiceDetails->bt_name = $request->bt_name;
        $btServiceDetails->bt_avatar = $request->bt_avatar;
        $btServiceDetails->company_name = $request->company_name;
        $btServiceDetails->service_name = $request->service_name;
        $btServiceDetails->type_of_trip = $request->type_of_trip;
        $btServiceDetails->service_industry = $request->service_industry;
        $btServiceDetails->service_origin = $request->service_origin;
        $btServiceDetails->business_lic_no = $request->business_lic_no;
        $btServiceDetails->service_type = $request->service_type;
        $btServiceDetails->service_label = $request->service_label;
        $btServiceDetails->service_route = $request->service_route; 
        $btServiceDetails->type_of_trip = $request->type_of_trip;   
        $btServiceDetails->unit_plate_no = $request->unit_plate_no;
        $btServiceDetails->vehicle_setting_capacity = $request->vehicle_setting_capacity;
        $btServiceDetails->vehicle_baggage_capacity = $request->vehicle_baggage_capacity;
        $btServiceDetails->sd_firstname = $request->sd_firstname;
        $btServiceDetails->sd_lastname = $request->sd_lastname;
        $btServiceDetails->sd_lic_no = $request->sd_lic_no;
        $btServiceDetails->sd_contact_no = $request->sd_contact_no;
        $btServiceDetails->service_description = $request->service_description;
        $btServiceDetails->fare_amount = $request->fare_amount;
        $btServiceDetails->fare_per_set = $request->fare_per_set;
        $btServiceDetails->book_month = $request->book_month;
        $btServiceDetails->book_day = $request->book_day;
        $btServiceDetails->book_year = $request->book_year;                
        $btServiceDetails->departure_time = $request->departure_time;
        $btServiceDetails->day_format = $request->day_format;
        $btServiceDetails->waiting_location = $request->waiting_location;
        $btServiceDetails->payment_method = $request->payment_method;

        if ($validation->passes()){
            if ($request->hasFile('service_avatar')) {
                $avatar = $request->file('service_avatar');
                
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $location = public_path('uploads/avatars/'. $filename);
                Image::make($avatar)->resize(360, 360)->save($location);
                $btServiceDetails->service_avatar = $filename;                
            }
            $btServiceDetails->save();
            // Session::flash('success', 'Service specification was updated.');
            return response()->json(['errorStatus' => 0]);

        } else {
            return response()->json(['errorStatus' => 1]);
        }
    }

    public function editServiceDetails(Request $request)
    {  
        $validation = Validator::make($request->all(), [
            'service_avatar' => 'image|mimes:jpeg,png,jpg|max:3048'
        ]);

        $btServiceDetails = BtServiceDetails::where('sd_id_no', $request->sd_id_no)->first();
        if (!empty($btServiceDetails)) {
        // $btServiceDetails->bt_name = $request->bt_name;
        $btServiceDetails->company_name = $request->company_name;
        $btServiceDetails->service_origin = $request->service_origin;
        $btServiceDetails->business_lic_no = $request->business_lic_no;
        $btServiceDetails->service_type = $request->service_type;
        $btServiceDetails->service_label = $request->service_label;
        $btServiceDetails->service_route = $request->service_route;    
        $btServiceDetails->unit_plate_no = $request->unit_plate_no;
        $btServiceDetails->vehicle_setting_capacity = $request->vehicle_setting_capacity;
        $btServiceDetails->vehicle_baggage_capacity = $request->vehicle_baggage_capacity;
        $btServiceDetails->sd_firstname = $request->sd_firstname;
        $btServiceDetails->sd_lastname = $request->sd_lastname;
        $btServiceDetails->sd_lic_no = $request->sd_lic_no;
        $btServiceDetails->sd_contact_no = $request->sd_contact_no;
        $btServiceDetails->service_description = $request->service_description;
        $btServiceDetails->fare_amount = $request->fare_amount;
        $btServiceDetails->fare_per_set = $request->fare_per_set;
        $btServiceDetails->book_month = $request->book_month;
        $btServiceDetails->book_day = $request->book_day;
        $btServiceDetails->book_year = $request->book_year;                
        $btServiceDetails->departure_time = $request->departure_time;
        $btServiceDetails->day_format = $request->day_format;
        $btServiceDetails->waiting_location = $request->waiting_location;
        $btServiceDetails->type_of_trip = $request->type_of_trip;
                
        if ($validation->passes()){
            if ($request->hasFile('service_avatar')) {
                $avatar = $request->file('service_avatar');
                
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $location = public_path('uploads/avatars/'. $filename);
                Image::make($avatar)->resize(360, 360)->save($location);
                $btServiceDetails->service_avatar = $filename;                
            }
            $btServiceDetails->save();
            // Session::flash('success', 'Service specification was updated.');
            return response()->json(['errorStatus' => 0]);

        } else {
            return response()->json(['errorStatus' => 1]);
            }
        }
    }

    public function deleteServiceItem(Request $request)
    { 
        $serviceDetails = false;
        if ($request->serviceId){
            $serviceDetails = BtServiceDetails::find($request->serviceId)->delete();
            return response()->json(['error' => 1]);
        } else {
            return response()->json(['error' => 0]);
        }    
    }

    public function showServiceDetails()
    {
        $authUser = Auth::user();
        $serviceDetails = BtServiceDetails::where('bt_id_no', $authUser->user_id_no)->paginate(5);
            return view('service_details.list_of_services', [
                'serviceDetails' => $serviceDetails, 
                'userData' => $authUser
        ]);
    }
}