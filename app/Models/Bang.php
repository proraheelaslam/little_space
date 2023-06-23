<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bang extends Model
{
    use HasFactory;

    protected $fillable = ['name','type','bang_id'];

    public function user()
    {
      return $this->belongsTo(User::class,'id','bang_id');
    }
    
}
