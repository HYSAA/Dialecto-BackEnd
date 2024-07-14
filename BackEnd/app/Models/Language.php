<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identifier' // Add a field to differentiate languages (e.g., 'sur', 'bis')
    ];

    // Optional: Define a relationship with the Phrase model (if applicable)
    public function phrases()
    {
        return $this->hasMany(Phrase::class);
    }
}