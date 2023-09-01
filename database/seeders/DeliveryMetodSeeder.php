<?php

namespace Database\Seeders;

use App\Models\DeliveryMetod;
use Illuminate\Database\Seeder;

class DeliveryMetodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryMetod::create([
            'name' => [
                'uz' => 'Tekin',
                'ru' => 'Бесплатно',
            ],
            'estimeted_time' => [
                'uz' => '5 kun',
                'ru' => '5 день',
            ],
            'sum' => 0,

        ]);


        DeliveryMetod::create([
            'name' => [
                'uz' => 'Standart',
                'ru' => 'Стандарт',
            ],
            'estimeted_time' => [
                'uz' => '3 kun',
                'ru' => '3 день',
            ],
            'sum' => 40000,

        ]);

        DeliveryMetod::create([
            'name' => [
                'uz' => 'Tez',
                'ru' => 'Быстро',
            ],
            'estimeted_time' => [
                'uz' => '1 kun',
                'ru' => '1 день',
            ],
            'sum' => 80000,

        ]);
    }
}
