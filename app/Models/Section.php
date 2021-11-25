<?php

namespace App\Models;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected  $table = 'sections';
    use HasFactory;

    //relaciones uno  a muchos inversa
    public function Clase(){
        return $this->belongsTo(Curso::class);
    }
}
