<?php

use Illuminate\Database\Seeder, \Illuminate\Support\Facades\DB;

class AccessRightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_rights')->insert(['name' => 'admin']);
        DB::table('access_rights')->insert(['name' => 'user']);
    }
}
