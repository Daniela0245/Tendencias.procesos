<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrega extends Model
{
    use HasFactory;
    protected $table = 'entregas';

  public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    public function trabajo()
    {
        return $this->belongsTo(Trabajo::class, 'id_trabajo');
    }
}
