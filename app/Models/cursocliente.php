<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursocliente extends Model
{
    use HasFactory;

    protected $table = 'curso__clientes';

    public $timestamp = false;
}
