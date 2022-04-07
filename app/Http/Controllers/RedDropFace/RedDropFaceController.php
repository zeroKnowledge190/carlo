<?php

namespace App\Http\Controllers\RedDropFace;

use App\Classes\Services\RedDropFaceService;
use App\Http\Controllers\Controller;

class RedDropFaceController extends Controller
{
    protected $redDropFacePage;

    public function __construct(RedDropFaceService $redDropFacePage)
    {
        $this->redDropFacePage = $redDropFacePage;
    }

    public function index()
    {
        try {
            return $this->redDropFacePage->indexView();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function indexAdmin()
    {
        try {
            return $this->redDropFacePage->indexAdminView();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
