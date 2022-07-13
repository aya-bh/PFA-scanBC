<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Aya', 
            'email' => 'Aya@gmail.com',
            'username' => 'ayabenhaj',
            'password' => 'admin123'
        ]);
    
       
        $user->assignRole(['admin']);
    }
}