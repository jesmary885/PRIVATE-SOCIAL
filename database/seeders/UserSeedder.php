<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User1 Prueba',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!'

        ]);

        User::create([
            'name' => 'User2 Prueba',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ]);

        User::create([
            'name' => 'User3 Prueba',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',


        ]);

        User::create([
            'name' => 'User4 Prueba',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ]);

        User::create([
            'name' => 'User5 Prueba',
            'email' => 'user5@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ]);
    }
}
