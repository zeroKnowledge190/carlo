<?php

namespace App\Http\Controllers\MainFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\BtServiceDetails;
use Auth;

class TravelFeatureController extends Controller
{
    public function index()
    { 
        $travelAndTours = BtServiceDetails::getTravelAndTours();
        $tFilters = BtServiceDetails::tFilters();
            return view('main_features.travel_services', [
                'travels' => $travelAndTours,
                'filters' => $tFilters
        ]);
    }

    public function standardFares()
    {
        $standardFares = BtServiceDetails::getStandardFares();
        $tFilters = BtServiceDetails::tFilters();
            return view('main_features.standard_travel_services',[
                'standards' => $standardFares,
                'filters' => $tFilters
        ]);
    }

    public function getFilters(Request $request)
    {
        $getOrigin = BtServiceDetails::select('service_route')->where('service_origin', $request->service_origin)
                    ->where('type_of_trip', 'Special Trip')
                    ->groupBy('service_route')->get(); 
            return response()->json($getOrigin);
    }

    public function getStandardFilters(Request $request)
    {
        $getOrigin = BtServiceDetails::select('service_route')->where('service_origin', $request->service_origin)
                    ->where('type_of_trip', 'Standard Fare')
                    ->groupBy('service_route')->get(); 
            return response()->json($getOrigin);
    }

    public function filterTravelServices(Request $request)
    {
        $getTravelServices = BtServiceDetails::where('service_origin', $request->serviceValue)
                            ->where('service_route', $request->regionValue)->where('type_of_trip', 'Special Trip')->get();                    
                            $pFilters = BtServiceDetails::tFilters();
            return view('main_features.result_travel_services', [
                'travels' => $getTravelServices,
                'filters' => $pFilters
            ]);
    }

    public function filterStandardTravelServices(Request $request)
    {
        $getTravelServices = BtServiceDetails::where('service_origin', $request->serviceValue)
                            ->where('service_route', $request->regionValue)->where('type_of_trip', 'Standard Fare')->get();
                            $pFilters = BtServiceDetails::tFilters();
            return view('main_features.result_standard_travel_services', [
                'standards' => $getTravelServices,
                'filters' => $pFilters
            ]);
    }
}
