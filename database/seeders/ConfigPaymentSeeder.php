<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $config_payment = [
            [
                'fee' => '250000',
                'vat' => 20, // Percentage value for VAT
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // this array $config_payment will be inserted into table 
        ConfigPayment::insert($config_payment);
    }
}
