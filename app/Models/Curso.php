<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_curso',
        'categoria_id'
    ];

    public $timestamps = false;

    public function categorias()
    {
        return $this->hasMany('App\Categoria', 'categoria_id');
    }
}
