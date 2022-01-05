<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbogadoEspecialidad extends Model
{
    protected $table = 'abogadoespecialidad';
    protected $primaryKey = 'Id_abogado';
    use HasFactory;
}
