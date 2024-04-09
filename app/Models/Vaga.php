<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $casts = [
       'competencias'=>'array'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
