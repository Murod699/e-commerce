<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Murod',
            'last_name' => 'Shomuratov',
            'email' => 'murodbek.0338@gmail.com',
            'phone' => '998904333699',
            'password' => Hash::make('Murod699'),

        ]);
        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached([Role::find(2)])->create();

    }
}
