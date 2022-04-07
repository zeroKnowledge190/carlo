<?php

namespace App\Classes\Services\Items;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\RdItems;
use DB;
use Auth;
use Exception;

class ManageItemsService
{
    public function indexView()
    {
        try {
            $hicItems = RdItems::all();
            return view('reddrop_back.admin_items.manage_items', [
                'hicItems' => $hicItems
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function dataTable($request)
    {
        try {
            $queryItems = DB::table('rd_items')
                            ->select('id', 
                                'item_id_no', 
                                'item_name', 
                                'category', 
                                'qty_stock', 
                                'unit_price', 
                                'beginning_inventory', 
                                'purchase_month',
                                'purchase_day',
                                'purchase_year',
                                'purchased_from',
                                'exp_month',
                                'exp_day',
                                'exp_year');                  

            // if ($request->hicType){
            //     $queryUsers->where('hic_type', $request->hicType); 
            // }

            // if ($request->hicType == 'All'){
            //     $queryUsers;                 
            // }

            $queryItems->where('hic_id_no', Auth::user()->hic_id_no)->get();

            $query = datatables()->of($queryItems);
            return $query
                ->editColumn('exp_month', function ($data) {
                return $data->exp_month .' '. $data->exp_day .' '. $data->exp_year;
            })
            ->addColumn('action', function ($data) {
                $editItem = $data->id;
                $deleteItem = $data->id;
                $action = '
                    <a target="_blank" style="text-decoration:none;">
                        <button class="btn btn-primary btn-sm" type="button"
                            data-item-id="'. $data->id .'"
                            data-item-id-no="'. $data->item_id_no .'"
                            data-item-name="'. $data->item_name .'"
                            data-item-category="'. $data->category .'"
                            data-item-qty-stock="'. $data->qty_stock .'"
                            data-item-unit-price="'. $data->unit_price .'"
                            data-pur-month="'. $data->purchase_month .'"
                            data-pur-day="'. $data->purchase_day .'"
                            data-pur-year="'. $data->purchase_year .'"
                            data-pur-from="'. $data->purchased_from .'"
                            data-exp-month="'. $data->exp_month .'"
                            data-exp-day="'. $data->exp_day .'"
                            data-exp-year="'. $data->exp_year .'"
                            onclick="editItems('. $data->id .', '. $editItem .', this)">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                    </a>
                    <a target="_blank" style="text-decoration:none;">
                        <button class="btn btn-danger btn-sm" type="button"
                            data-item-id="'. $data->id .'"
                            data-item-name="'. $data->item_name .'"
                            onclick="deleteItems('. $data->id .', '. $deleteItem .', this)">
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

    public function addItems(Request $request)
    {
        try {
            $addItems =  RdItems::addItems($request);
            return $addItems;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function editItems(Request $request)
    {
        try {
            $updatedItems =  RdItems::saveUpdatedItems($request);
            return $updatedItems;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteItems(Request $request)
    {
        try {
            $deletedItems =  RdItems::saveDeletedItems($request);
            return $deletedItems;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }
}
