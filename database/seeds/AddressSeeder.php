<?php

use Illuminate\Database\Seeder;
use App\Models\adresses;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        adresses::create([
            'id_user'       => 1,
            'type_address'  => 1,
            'cep'           => '49270-000',
            'logradouro'    => 'Rua Joaquim Amâncio Filho',
            'numero'        => 277,
            'bairro'        => 'Centro',
            'cidade'        => 'Cristinápolis',
            'estado'        => 'SE',
            'ibge'          => 2801702
        ]);
    }
}
