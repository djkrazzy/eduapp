<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Oscar lopez',
             'email'=>'edicionpcs@gmail.com',
              'password'=> bcrypt('12345678'),
              'last_name'=> 'Lopez',
              'username'=> 'admin'
        ])->assignRole('admin');
      $users=User::factory(15)->create();
       foreach ($users as $user) {
               $user->assignRole('teacher');

           };

           $users=User::factory(50)->create();
       foreach ($users as $user) {
               $user->assignRole('student');

           };

            $users=User::factory(25)->create();
       foreach ($users as $user) {
               $user->assignRole('parent');

           };
        
    }
}
