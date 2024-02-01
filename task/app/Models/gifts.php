<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gifts extends Model
{
    
    protected $table = 'gift_items';
    
    protected $fillable = [
        'name',
        'unit_price',
        'units_owned',
    ];
    // public static function all(){

    //     // use HasFactory;
    // };

}
