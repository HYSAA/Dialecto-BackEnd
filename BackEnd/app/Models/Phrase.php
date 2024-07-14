<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id', // Foreign key to link with Language model
        'cebuano',
        'english'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
