<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Mf;

class Car extends Model
{
    use HasFactory;
    // protected $table='cars';
    // protected $fillable=['mf_id','make','model','produced_on','image'];

    public function mf()
    {
        # code...
        return $this->belongsTo(Mf::class,'mf_id','id');
    }
}
