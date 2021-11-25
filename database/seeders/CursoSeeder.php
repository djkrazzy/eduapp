<?php

namespace Database\Seeders;
use App\Models\Curso;
use App\Models\Section;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos=Curso::factory(15)->create();
       Curso::create([
           'name' => 'Matematicas',
       'jornada_id' => '1',
       'teacher_id' =>'1',
       'nivel_id' =>'1' ]
         );

         foreach ($cursos as $curso) {
            Section::create([
                'name' => 'A',
            'curso_id' => $curso->id,
            'teacher_id' => '1',]

              );
            $curso->id;

        };
    }
}
