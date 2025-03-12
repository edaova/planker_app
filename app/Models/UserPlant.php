<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlant extends Model
{
    use HasFactory;

    protected $table = 'user_plants';

    protected $fillable = 
    [
        'user_id',
        'plant_id',
        'plant_name',
    ];

    // Uživatel, kterému patří tato rostlina
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // Původní rostlina ze seznamu všech rostlin
    public function plant() 
    {
        return $this->belongsTo(Plant::class);
    }

    // Eventy vztahující se k této rostlině
    public function events()
    {
        return $this->hasMany(Event::class, 'plant_id');
    }
}