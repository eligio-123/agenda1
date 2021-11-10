<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'evento'=>'required',
        'title'=>'required',
        'descripcion'=>'required',
        'date'=>'required',
        'time'=>'required'
    ];

    protected $fillable=['evento','title','descripcion','date','time'];
}
