<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Finanzas',
            'email' => 'finanzas@admin.com',
            'password' => Hash::make('finanzas'),
            'role' => 'ADMINISTRADOR',
            'activated' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Finanzas2',
            'email' => 'finanzas2@admin.com',
            'password' => Hash::make('finanzas2'),
            'role' => 'ADMINISTRADOR',
            'activated' => 1,
        ]);
    }
}
