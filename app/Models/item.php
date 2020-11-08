<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo('App\Models\menu');
    }

    public function meal()
    {
        return $this->hasMany('App\Models\meal');
    }
}
