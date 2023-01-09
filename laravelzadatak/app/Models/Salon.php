<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Frizer;


class Salon extends Model
{
    use HasFactory;

    public function frizeri()
    {
        return $this->hasMany(Frizer::class);
    }
}