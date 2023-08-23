<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Admin Role
        $this->superAdminRole();
        $this->adminRole();
        $this->teacherRole();
        $this->parentRole();
        $this->studentRole();
        $this->userRole();
    }
    public function superAdminRole(){
        
        $user = User::where('email', 'superadmin@email.com')->first();
      
        $role = Role::create(['name' => 'Super Admin']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
    public function adminRole(){
        
        $user = User::where('email', 'admin@email.com')->first();
      
        $role = Role::create(['name' => 'Admin']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
    public function teacherRole(){
        
        $user = User::where('email', 'teacher@email.com')->first();
      
        $role = Role::create(['name' => 'Teacher']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
    public function parentRole(){
        
        $user = User::where('email', 'parent@email.com')->first();
      
        $role = Role::create(['name' => 'Parent']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
    public function studentRole(){
        
        $user = User::where('email', 'student@email.com')->first();
      
        $role = Role::create(['name' => 'Student']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
    public function userRole(){
        
        $user = User::where('email', 'user@email.com')->first();
      
        $role = Role::create(['name' => 'User']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
}
