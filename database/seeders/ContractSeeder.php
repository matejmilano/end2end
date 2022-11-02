<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contract::create([
            'id' => 1,
            'type' => 'Određeno'
        ]);

        Contract::create([
            'id' => 2,
            'type' => 'Neodređeno'
        ]);
    }
}
