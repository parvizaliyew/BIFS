<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Counter::create(
            [
                'experince' => '10',
                'count' => '250',
                'partners'=>'550',
                'product' => '300',
            ]);
    }
}
