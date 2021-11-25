<?php

namespace App\Models;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected  $table = 'curso';

    use HasFactory;
    //relaciones uno  a muchos
    public function sections(){
          return $this->hasMany(Section::class);
    }

    //relaciones uno  a muchos
    public function users(){
        return $this->belongsTo(User::class ,'teacher_id');
  }
}
