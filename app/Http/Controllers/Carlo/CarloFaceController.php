<?php

namespace App\Http\Controllers\Carlo;

use App\Classes\Services\CarloServices\CarloFaceService;
use App\Http\Controllers\Controller;

class CarloFaceController extends Controller
{
    protected $carloFacePage;

    public function __construct(CarloFaceService $carloFacePage)
    {
        $this->carloFacePage = $carloFacePage;
    }

    public function index()
    {
        try {
            return $this->carloFacePage->indexView();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function backEndPanel()
    {
        try {
            return $this->carloFacePage->indexBackEnd();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function indexAdmin()
    {
        try {
            return $this->carloFacePage->indexAdminView();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
