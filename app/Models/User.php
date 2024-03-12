<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Evento;
use App\Models\Inscripcion;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellidos',
        'password',
        'email',
        'dni',
        'edad',
        'telefono',
        'direccion',
        'ciudad',
        'empresa',
        'puesto',
        'rol',
    ];



    public function evento():HasMany
     {
        return  $this->hasMany(Evento::class,'asistente_id');//un user puede crear mucho eventos
    }                                         //nombre de la columna en la tabla evento 

    public function inscripcion():HasMany
     {
        return  $this->hasMany(Inscripcion::class,'asistente_id');//un user puede tener muchas inscripciones
    }                                             //nombre de la columna en la tabla inscripcion 

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



}
