<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Car;

class Mf extends Model
{
    use HasFactory;
    // protected $table = 'mfs';
    // protected $fillable=['name'];

    public function cars()
    {
        # code...
        return $this->hasMany(Car::class);
    }
    
}
