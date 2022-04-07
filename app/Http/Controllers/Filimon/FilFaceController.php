<?php

namespace App\Http\Controllers\Filimon;

use App\Classes\Services\FilimonServices\FilFaceService;
use App\Http\Controllers\Controller;

class FilFaceController extends Controller
{
    protected $filFacePage;

    public function __construct(FilFaceService $filFacePage)
    {
        $this->filFacePage = $filFacePage;
    }

    public function index()
    {
        try {
            return $this->filFacePage->indexView();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function indexAdmin()
    {
        try {
            return $this->filFacePage->indexAdminView();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
