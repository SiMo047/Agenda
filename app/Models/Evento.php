<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Inscripcion;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
        'descripcion',
        'ciudad',
        'direccion',
        'estado',
        'aforomax',
        'tipo',
        'numMaxEntradasPorPersona',
        'categoria_id',
        'asistente_id'
    ];


    public function  usuario(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
    
    public function  categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function inscripcion(): HasMany
    {
        return $this->hasMany(Inscripcion::class);
    }

}
