<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Washington Neto',
            'email'         => 'wprimesolucoes@gmail.com',
            'best_tel'      => '+5579998866386',
            'type_persona'  => '1', //Pessoa física
            'type_user'     => '99', //Admin
            'id_address'    => 1, //Address Default
            'active'        => true,
            'password'      => bcrypt('!@h81mcsbr!@')
        ]);
    }
}
