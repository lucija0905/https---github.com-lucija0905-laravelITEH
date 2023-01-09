<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salon;
use App\Models\Musterija;

class Frizer extends Model
{
    use HasFactory;

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function musterije()
    {
        return $this->hasMany(Musterija::class);
    }
}