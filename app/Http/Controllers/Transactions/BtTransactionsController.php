<?php

namespace App\Http\Controllers\Transactions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BtTransactions;
use App\Models\BtClientAccounts;
use App\User;
use DB;

class BtTransactionsController extends Controller
{

    public function bookTransactions(Request $request)
    {
        $BtTransactions = BtTransactions::bookTransactions($request);
            return $BtTransactions;
    }

    public static function showClientData(Request $request)
    {
        self::transData($request->transIdNo);
    }  
    
    public static function transData($transIdNo)
    {
        $clientData = BtTransactions::where('trans_id_no', $transIdNo)->first();
            return view('transactions.complete_transaction', [
            'clients' => $clientData
        ]);
    }

    public function createClientAccount(Request $request)
    {
        $createClientAccount = BtClientAccounts::createClientAccount($request);
            return $createClientAccount;
    } 
}