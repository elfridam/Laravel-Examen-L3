<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(TypeFormation::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function getFormationsCountAttribute()
    {
        return $this->formations()->count();
    }
}
