<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidads')->insert([
            'nombre' => 'Admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'unidad_id' => '1',
            'email' => 'admin@admin.cl',
            'password' => Hash::make('contra123'),
            'rol' => 'ROLE_ADMIN'
        ]);
    }
}
