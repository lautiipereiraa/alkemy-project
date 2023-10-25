<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = new User();
        $users->nombre = "admin";
        $users->email = "admin.com";
        $users->contrasena = bcrypt("1234");
        $users->telefono =("1135133247");
        $users->domicilio = ("Calle Falsa");
    }
}
