<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Experiencia;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre',
        'direccion',
        'telefono',
        'email',
        'web', 
        'informacion_extra'
    ];

    public function experiencia(): HasMany 
    {
        return $this->hasMany(Experiencia::class);
    }
}
