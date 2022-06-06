<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $fillable = ['nombre', 'nivel', 'horas_academicas', 'profesor_id'];
    protected $hidden = ['id'];

    public function profesor()
    {
        return $this->belongsTo(profesor::class);/* Metodo que define relacion muchos a uno */
    }
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);/* Metodo que define relacion muchos a muchos con cursos */
    }
}
