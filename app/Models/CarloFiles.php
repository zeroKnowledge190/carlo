<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarloFiles extends Model
{
    protected $table = "carlo_files";
	protected $guarded = ['id'];
    
}

