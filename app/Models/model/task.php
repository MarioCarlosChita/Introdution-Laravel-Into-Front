<?php

namespace App\Models\model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected  $table ="task";
    protected  $fillable=[
        'id',
        'nome',
        'email'
    ];
}
