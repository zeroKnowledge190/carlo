<?php

namespace App\Classes\Services\Dashboard;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use DB;
use Exception;

class ManageUsersService
{
    public function indexView()
    {
        try {
            $hicUsers = User::all();
            $hicTypes = Constants::HIC_TYPES;
            return view('fil_views.manage_list_of_users', [
                'hicUsers' => $hicUsers,
                'hicTypes' => $hicTypes
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function dataTable($request)
    {
        try {
            $queryUsers = DB::table('users')
                            ->select('id', 
                            'hic_id_no', 
                            'hic_name', 
                            'hic_type', 
                            'full_name',
                            'user_firstname', 
                            'user_lastname', 
                            'hic_contact_no', 
                            'hic_user_level', 
                            'email', 
                            'hic_user_status', 
                            'created_at')->where('user_account_type', 'Citizen');                  
            if ($request->hicType){
                $queryUsers->where('hic_type', $request->hicType); 
            }
            if ($request->hicType == 'All'){
                $queryUsers;                 
            }
            $queryUsers->get();

            $query = datatables()->of($queryUsers);
            return $query
                ->editColumn('user_firstname', function ($data) {
                return $data->user_firstname .' '. $data->user_lastname;
            })
            ->addColumn('action', function ($data) {
                $editUser = $data->id;
                $deleteUser = $data->id;
                $action = '
                    <a target="_blank" style="text-decoration:none;">
                        <button class="btn btn-primary btn-xs" type="button"
                            data-hic-id="'. $data->id .'"
                            data-hic-name="'. $data->full_name .'"
                            data-hic-email="'. $data->email .'"
                            data-user-name"'. $data->user_firstname. ' '. $data->user_lastname .'"
                            data-hic-user-status="'. $data->hic_user_status .'"
                            data-hic-created-at="'. $data->created_at .'"
                            onclick="editUser('. $data->id .', '. $editUser .', this)">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                    </a>
                    <a target="_blank" style="text-decoration:none;">
                        <button class="btn btn-danger btn-xs" type="button"
                            data-e-hic-id="'. $data->id .'"
                            data-e-user-name"'. $data->full_name .'"
                            data-function="'. $data->user_firstname.' '.$data->user_lastname .'"
                            onclick="deleteUserModal(this)">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </a>
                    ';
                return $action;
            })
            ->make();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function editUsers(Request $request)
    {
        try {
            $updatedUsers =  User::saveEditedUsers($request);
            return $updatedUsers;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteUsers(Request $request)
    {
        try {
            $deletedUsers =  User::saveDelitedUsers($request);
            return $deletedUsers;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

}
