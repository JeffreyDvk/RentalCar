<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(!User::where('email', 'adm1n@rentalcar.com')->first()){
            $user = new User([
                'email' => 'adm1n@rentalcar.com',
                'name' => 'Adm1n Rentalcar',
                'is_admin' => 1,
                'password' => Hash::make('adm1n1234'),
            ]);
            $user->save();
        }
    }
}
