<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Brand::factory()->times(5)->hasPhones(20)->create();
        
        Brand::factory()->times(5)->create();

        // $brands = [
        //     [
        //       'name' => 'Apple',
        //       'founded' => '1976',
        //       'location' => 'LA, USA',
        //     ],
        //     [
        //         'name' => 'Samsung',
        //         'founded' => '1969',
        //         'location' => 'Suwon-Si, South Korea',
        //     ],
        //     [
        //       'name' => 'OnePlus',
        //       'founded' => '2013',
        //       'location' => 'Shenzhen, China',
        //     ],
        //     [
        //         'name' => 'Huawei',
        //         'founded' => '1987',
        //         'location' => 'Shenzhen, China',
        //     ],
        //     [
        //         'name' => 'Google',
        //         'founded' => '1998',
        //         'location' => 'California, USA',
        //     ],
        //     [
        //         'name' => 'OPPO',
        //         'founded' => '2004',
        //         'location' => 'Dongguan, China',
        //     ],
        //     [
        //         'name' => 'Nokia',
        //         'founded' => '1865',
        //         'location' => 'Tampere, Finland',
        //     ],
        //     [
        //         'name' => 'Xiaomi',
        //         'founded' => '2010',
        //         'location' => 'Beijing, China',
        //     ],
        //     [
        //         'name' => 'Honor',
        //         'founded' => '2013',
        //         'location' => 'Shenzhen, China',
        //     ],
            
     
        //   ];
    }
}
