<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Setting::create(
        [
            'phone_1' => '055 555 55 55',
            'phone_2' => '055 555 55 55',
            'adress'=>'{"az":"Do ut similique dign","en":"Non laboris sed id "}',
            'email' => 'admin@gmail.com',
            'fb' => 'www',
            'ins' => 'www'






    
        ]);

    }
}
