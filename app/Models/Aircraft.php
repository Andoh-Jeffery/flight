<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $fillable=['serial_number','manufacturer','model'];
    use HasFactory;

    public function flight(){
        return $this->hasMany(Flight::class);
    }
}