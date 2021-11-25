<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i < 11; $i++) {
            ClassRoom::create([
                'name' => 'Salon '.$i,
            'numero' => $i,
            ]);
          }
        }
}
