<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalParameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blood_pressure',
        'heart_rate',
        'body_temperature',
        'oxygen_level',
        'weight',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
