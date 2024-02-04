<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'price',
        'active',
        'sort',
    ];


    protected $casts = [
        //приводит занчения к указанному типу данных
        'price' => 'float',
        'active' => 'boolean',
    ];
}
