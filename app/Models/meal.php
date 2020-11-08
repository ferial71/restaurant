<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function item()
    {
        return $this->hasMany('App\Models\item');
    }

    public function order()
    {
        return $this->hasMany('App\Models\order');
    }
}
