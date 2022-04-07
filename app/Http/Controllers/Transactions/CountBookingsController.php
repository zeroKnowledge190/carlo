<?php

namespace App\Http\Controllers\Transactions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BtTransactions;
use App\Models\BtClientAccounts;
use App\User;
use DB;

class CountBookingsController extends Controller
{
    public function countBookNotifications(Request $request)
    {
        $countBookNotifications = BtTransactions::countBookNotifications($request);
            return $countBookNotifications;
    }

    public function dropDownListOfBookings()
    {
        $dropDownListOfBookings = BtTransactions::dropDownListOfBookings();   
            return view('layouts.landing', [
            'dropDowns' => $dropDownListOfBookings
        ]);
    }

    public function bookingPerCustomer(Request $request)
    {
        $bookingPerCustomer = BtTransactions::bookingPerCustomer($request);   
            return view('transactions.customer_booking_page', [
            'customerBook' => $bookingPerCustomer
        ]);
    }

    public function readCustomerBooking(Request $request)
    {
        $readCustomerBooking = BtTransactions::readCustomerBooking($request);   
            return $readCustomerBooking;           
    }

    public function custReadCustomerBooking(Request $request)
    {
        $custReadCustomerBooking = BtTransactions::custReadCustomerBooking($request);   
            return $custReadCustomerBooking;           
    }

    public function saveAcceptedBooking(Request $request)
    {
        $saveAcceptedBooking = BtTransactions::saveAcceptedBooking($request);   
            return $saveAcceptedBooking;           
    }

    public function custSaveAcceptedBooking(Request $request)
    {
        $custSaveAcceptedBooking = BtTransactions::custSaveAcceptedBooking($request);   
            return $custSaveAcceptedBooking;           
    }

    public function customerCountBookNotifications(Request $request)
    {
        $custCountBookNotifications = BtTransactions::customerCountBookNotifications($request);
            return $custCountBookNotifications;
    }

    public function customerDropDownListOfBookings()
    {
        $custDropDownListOfBookings = BtTransactions::customerDropDownListOfBookings();   
            return view('layouts.customer_landing', [
            'custDropDowns' => $custDropDownListOfBookings
        ]);
    }

}