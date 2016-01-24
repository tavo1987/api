<?php

use Illuminate\Database\Seeder;

class OAuthClientSeeder extends Seeder
{

    public function run()
    {
        DB::table('oauth_clients')->insert([
            'id' => 1,
            'secret' => 'ShiftApi2016',
            'name' => 'shiftlatamecuador'
        ]);
    }
}