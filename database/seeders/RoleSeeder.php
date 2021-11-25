<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1= Role::create(['name'=> 'admin']);
         $role2= Role::create(['name'=> 'student']);
         $role3= Role::create(['name'=> 'teacher']);
         $role4= Role::create(['name'=> 'parent']);
         $role5= Role::create(['name'=> 'librarian']);
         $role6= Role::create(['name'=> 'accountants']);
         $role7= Role::create(['name'=> 'colaborador']);
         $role8= Role::create(['name'=> 'staf']);
        Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2,$role3,$role4,$role5,$role6,$role7,$role8]);

       /* Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.tag.idex'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.tag.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.tag.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.tag.destroy'])->syncRoles([$role1,$role2]);


        Permission::create(['name' => 'admin.posts.idex'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.users.idex'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.users.destroy'])->syncRoles([$role1,$role2]);*/

    }
}
