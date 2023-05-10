<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bang extends Model
{
    use HasFactory;

    protected $fillable = ['name','type','bang_id'];

    
}
