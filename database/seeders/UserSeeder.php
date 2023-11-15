<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = env('ADMIN_NAME', 'Administrador'); // Valor por defecto es 'Administrador'
        $admin->password = Hash::make(env('ADMIN_PASSWORD', 'admin')); // Valor por defecto es 'admin'
        $admin->email = env('ADMIN_EMAIL', 'admin@local.com'); // Valor por defecto es 'admin@local.com'
        $admin->role = 'Administrador';
        $admin->status = 'Activo';
        $admin->save();
    }
}
