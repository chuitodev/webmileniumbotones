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
        $adminEmail = env('ADMIN_EMAIL', 'admin@local.com'); // Valor por defecto es 'admin@local.com'

        User::firstOrCreate(
            ['email' => $adminEmail],
            [
                'name' => env('ADMIN_NAME', 'Administrador'), // Valor por defecto es 'Administrador'
                'password' => Hash::make(env('ADMIN_PASSWORD', 'admin')), // Valor por defecto es 'admin'
                'role' => 'Administrador',
                'status' => 'Activo'
            ]
        );
    }
}

