<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;
    //var inst
    protected $table = 'profesores';

    protected $primaryKey = 'id';
    protected $fillable = ['nombre_apellido', 'profesion' . 'grado_academico', 'telefono'];
    protected $hidden = ['id'];

    public function cursos()
    {
        return $this->hasMany(curso::class);/* este metodo define la relacion 1 a muchos -- Debe definirse la inversa en el otro modelo que interviene (cursos * a 1 )  */
    }
}
