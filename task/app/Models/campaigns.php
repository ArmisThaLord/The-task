<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaigns extends Model
{
    protected $table = 'gift_campaigns';
    public $timestamps = false;
    protected $guarded = [];
}
