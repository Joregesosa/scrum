<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cursos extends Model
{
    use HasFactory;

    public function usuarios(): HasMany
    {
        return $this->hasMany(cursos::class, 'curso_id');
    }
}
