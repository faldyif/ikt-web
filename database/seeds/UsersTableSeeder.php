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
            'news_signature' => '<br><p>Salam CINTA<br>Salam Merah Putih<br>Bangga Berkarya Bangga Indonesia</p><p>IPC Car Terminal<br>We Will Shine With You</p>',
        ]);
        DB::table('users')->insert([
            'name' => "Admin Operasional",
            'email' => 'op@ikt.id',
            'password' => bcrypt('secret'),
            'type' => 2,
            'news_signature' => '<br><p>Salam CINTA<br>Salam Merah Putih<br>Bangga Berkarya Bangga Indonesia</p><p>IPC Car Terminal<br>We Will Shine With You</p>',
        ]);
    }
}
