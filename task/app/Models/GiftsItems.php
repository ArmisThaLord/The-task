<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftsItems extends Model
{
    // public static function all(){
        
    // }
    
    protected $table = 'gift_items';
    public $timestamps = false;
    protected $guarded = [];
    
    
}
