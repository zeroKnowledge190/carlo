<?php

namespace App\Http\Controllers\Members;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\Dashboard\CountMembersService;
use App\User;
use DB;
use Exception;

class CountMembersController extends Controller
{
    protected $countMembers;

    public function __construct(CountMembersService $countMembers)
    {
        $this->countMembers = $countMembers;
    }

    public function countMembersNotifications(Request $request)
    {
        try {
        $countMembersNotifications = $this->countMembers->countMembersNotifications($request);
            return $countMembersNotifications;
        } catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function dropDownListOfMembers(Request $request)
    {
        try {
        $dropDownListOfMembers = $this->countMembers->dropDownListOfMembers($request);
            return $dropDownListOfMembers;
        } catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function seenMembersRegistrations(Request $request)
    {
        try {
        $seenMembersRegistrations = $this->countMembers->seenMembersRegistrations($request);
            return $seenMembersRegistrations;
        } catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function saveAcceptedMembers(Request $request)
    {\Log::info('save');
        try {
        $saveAcceptedMembers = $this->countMembers->saveAcceptedMembers($request);
            return $saveAcceptedMembers;
        } catch(Exception $e){
            return $e->getMessage();
        }
    }

}