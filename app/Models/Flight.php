<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable=['aircraft_id','flight_number','origin','destination','date','dep_time','arr_time'];
    public function plane()
    {
        return $this->belongsTo(Plane::class);
    }

    public function passengers()
    {
        return $this->belongsToMany(Passenger::class)->withTimestamps();
    }

    use HasFactory;
}