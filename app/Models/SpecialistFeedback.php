<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialist_name',
        'advice',
        'diagnosis',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
