<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'image', 
        'watering_frequency', 
        'fertilizer',
        'humidity',
        'sunlight', 
        'temperature', 
        'pet_friendly',
        'description',
        'parent_id',
    ];

    // Rostlina patří mnoha uživatelům
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_plants', 'plant_id', 'user_id')
                    ->withPivot('last_watered', 'watering_frequency', 'last_fertilized', 'fertilizer', 'notes')
                    ->withTimestamps();
    }

    // Rodičovská rostlina
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Plant::class, 'parent_id');
    }

    // Pod-rostliny 
    public function subPlants(): HasMany
    {
        return $this->hasMany(Plant::class, 'parent_id');
    }

    // Dědění hodnot od rodiče
    public function getWateringFrequencyAttribute($value)
    {
        return $value ?? optional($this->parent)->watering_frequency;
    }

    public function getFertilizerAttribute($value)
    {
        return $value ?? optional($this->parent)->fertilizer;
    }

    public function getHumidityAttribute($value)
    {
        return $value ?? optional($this->parent)->humidity;
    }

    public function getSunlightAttribute($value)
    {
        return $value ?? optional($this->parent)->sunlight;
    }

    public function getTemperatureAttribute($value)
    {
        return $value ?? optional($this->parent)->temperature;
    }

    public function getPetFriendlyAttribute($value)
    {
        return $value ?? optional($this->parent)->pet_friendly;
    }

    public function getDescriptionAttribute($value)
    {
        return $value ?? optional($this->parent)->description;
    }

    // Kontrola, zda si uživatel uložil danou rostlinu
    public function isSavedByUser($user): bool
    {
        return $this->users()->whereExists(function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->exists();
    }
}