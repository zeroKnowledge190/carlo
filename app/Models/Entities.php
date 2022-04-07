<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entities extends Model
{
    protected $table = "entities";
	protected $guarded = ['id'];
    
}

