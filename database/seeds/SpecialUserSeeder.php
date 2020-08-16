<?php

use Illuminate\Database\Seeder;

class SpecialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Eros',
            'lastname' => 'Montin',
            'username' => 'emontin',
            'email' => 'eros.montin@gmail.com',
            'password' => Hash::make('eros'),
            'level' => 'god',
            'status' => 'active',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


        DB::table('users')->insert([
            'name' => 'Riccardo',
            'lastname' => 'Lattanzi',
            'username' => 'rlatanzi',
            'email' => 'r.lattanzi@gmail.com',
            'password' => Hash::make('riccardo'),
            'level' => 'admin',
            'status' => 'active',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Roy',
            'lastname' => 'Wiggins',
            'username' => 'rwiggins',
            'email' => 'r.wiggins@gmail.com',
            'password' => Hash::make('roy'),
            'level' => 'internaldev',
            'status' => 'active',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


        DB::table('users')->insert([
            'name' => 'user',
            'lastname' => 'user',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'level' => 'standard',
            'status' => 'active',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


    }
}
