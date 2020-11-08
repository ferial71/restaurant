<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function restaurent()
    {
     return $this->belongsTo('App\Models\restaurent');
    }

    public function item()
    {
        return $this->hasMany('App\Models\item');
    }
}
