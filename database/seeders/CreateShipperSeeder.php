<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Shipper;
use Illuminate\Database\Seeder;

class CreateShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shippers = [
            [
                'name' => 'SiPalingCepat',
                'phone' => '089123321456',
                'price' => 12000,
            ],
            [
                'name' => 'JNY',
                'phone' => '081232434691',
                'price' => 12000,
            ],
        ];

        foreach ($shippers as $shipper) {
            Shipper::create($shipper);
        }
    }
}
