<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evento;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Categoria extends Model
{
    use HasFactory;


    protected $fillable =[
        'nombre'
    ];

    public function evento(): HasMany 
    {
        return $this->hasMany(Evento::class);
    }
}
