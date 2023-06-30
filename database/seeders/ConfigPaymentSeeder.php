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
        // create data here
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20', //vat is percentase
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            
        ];

        //this array $specialist will be insert to table 'specialist'
        ConfigPayment::insert($config_payment);
    }
}
