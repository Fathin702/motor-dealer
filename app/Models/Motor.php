<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_url'];

    // Relasi dengan Specification
    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}
