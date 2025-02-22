<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pagos';

    public function estudiante() {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
   
    }
    
  
}
