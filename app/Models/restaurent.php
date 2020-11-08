<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function menu()
    {
        return $this->hasMany('App\Models\menu');
    }
}
