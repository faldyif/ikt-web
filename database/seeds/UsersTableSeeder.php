<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin Sekper",
            'email' => 'sekper@ikt.id',
            'password' => bcrypt('secret'),
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'name' => "Admin Operasional",
            'email' => 'op@ikt.id',
            'password' => bcrypt('secret'),
            'type' => 2,
        ]);
    }
}
