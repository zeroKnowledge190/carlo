<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Classes\Services\CityStuffService;

class CityStuffController extends Controller
{
    protected $cityStuffService;

    public function __contstruct(CityStuffService $cityStuffService){
        $this->cityStuffService = $cityStuffService;
    }

    public function index(){

        return $this->cityStuffService;

    }
}