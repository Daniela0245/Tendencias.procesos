<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    protected $table = 'calificaciones';

    public function inscripcion()
      {
          return $this->belongsTo(Inscripcion::class, 'id_inscripcion');
      }
  
      public function entrega()
      {
          return $this->belongsTo(Entrega::class, 'id_entrega');
      }
}
