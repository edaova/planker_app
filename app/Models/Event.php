<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plant_id',
        'plant_name',
        'event_type',
        'event_date',
        'notes',
        'color',
    ];

    // Každý event patří jednomu uživateli
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Event patří k určité rostlině
    public function plant()
    {
        return $this->belongsTo(Plant::class, 'plant_id');
    }
}