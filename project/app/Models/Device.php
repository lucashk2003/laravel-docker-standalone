<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['brand', 'model', 'costumer_id'];

    // Relación inversa con Costumer
    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }
}
