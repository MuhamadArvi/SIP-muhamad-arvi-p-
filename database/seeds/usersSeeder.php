<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('roles')
                ->where('name','admin')
                ->first();
                $users = DB::table('roles')
                ->where('name','user')
                ->first();
        
        DB::table('users')->insert([
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$admin->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            ['name'=>Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'),'roles_id' =>$users->id],
            
            
        ]);
    }
}