<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;
    protected $table = 'trabajos';

    public function curso() {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function profesor() {
        return $this->belongsTo(Profesor::class, 'id_profesor');
    }
}
