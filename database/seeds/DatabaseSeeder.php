<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Cliente::Truncate();
        DB::table('oauth_clients')->truncate();


        factory(Cliente::class,100)->create();

        $this->call('OAuthClientSeeder');
    }
}
