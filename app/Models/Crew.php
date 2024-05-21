<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $fillable=['employee_number','first_name','last_name','address','salary'];
    use HasFactory;
    public function flights()
    {
        return $this->belongsToMany(Flight::class)->withTimestamps();
    }
}