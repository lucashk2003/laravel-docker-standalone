<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Costumer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'level', 'address'];

    // Relación uno a muchos con Device
    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}

