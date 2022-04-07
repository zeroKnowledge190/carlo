<?php

namespace App\Classes\Services\CarloServices;
use Exception;
use Auth;

class CarloFaceService
{
    public function indexView()
    {
        try {
            return view('carlo_web.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function indexBackEnd()
    {
        try {
            return view('filfront.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
