<?php

use Illuminate\Database\Seeder, \Illuminate\Support\Facades\DB, \App\Enums\AccessRights;

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
            'name' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'access_rights' => AccessRights::ADMIN_ACCESS_RIGHT
        ]);

        factory(App\User::class, 50)->create();
    }
}
