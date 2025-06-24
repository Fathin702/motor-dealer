<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = ['motor_id', 'engine', 'horsepower', 'torque', 'price'];

    // Relasi dengan Motor
    public function motor()
    {
        return $this->belongsTo(Motor::class);
    }
}
