<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContractLenght;
use GuzzleHttp\Promise\Create;

class ContractLenghtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContractLenght::create([
            'id' => 1,
            'lenght' => 'Neodređeno'
        ]);

        ContractLenght::create([
            'id' => 2,
            'lenght' => '1'
        ]);

        ContractLenght::create([
            'id' => 3,
            'lenght' => '3'
        ]);

        ContractLenght::create([
            'id' => 4,
            'lenght' => '6'
        ]);

        ContractLenght::create([
            'id' => 5,
            'lenght' => '12'
        ]);
    }
}
