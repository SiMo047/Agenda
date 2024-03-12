<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use App\Models\User;
use App\Models\Evento;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';

    protected $fillable = ['asistente_id', 'evento_id', 'numEntradas', 'estado'];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function evento(): BelongsTo 
    {
        return $this->belongsTo(Evento::class);
    } 
}
