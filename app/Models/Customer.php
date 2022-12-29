<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';

    public function room(){

        return $this->belongsTo(Room::class,'id','room_id');
    }
}