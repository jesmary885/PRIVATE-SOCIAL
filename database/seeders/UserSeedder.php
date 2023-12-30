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
            'username' => 'User1 Prueba',
            'name' => 'User1',
            'lastname' => 'Prueba',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!'

        ]);

        User::create([
            'username' => 'User2 Prueba',
            'name' => 'User2',
            'lastname' => 'Prueba',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ]);

        User::create([
            'username' => 'User3 Prueba',
            'name' => 'User3',
            'lastname' => 'Prueba',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',


        ]);

        User::create([
            'username' => 'User4 Prueba',
            'name' => 'User4',
            'lastname' => 'Prueba',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ]);

        User::create([
            'username' => 'User5 Prueba',
            'name' => 'User5',
            'lastname' => 'Prueba',
            'email' => 'user5@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ]);
    }
}
