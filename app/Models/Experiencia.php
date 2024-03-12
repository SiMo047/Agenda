<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use App\Models\Empresa;

class Experiencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fechaInicio',
        'fechaTexto',
        'descripcion_corta',
        'precio_por_persona',
        'link',
        'descripcion_larga',
        'empresa_id'
    ];

    public function empresa(): BelongsTo 
    {
        return $this->belongsTo(Empresa::class);
    }
}
