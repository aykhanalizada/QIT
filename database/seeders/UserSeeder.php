<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Aykhan',
            'surname'=>'Alizada',
            'username'=>'aykhanalizada_',
            'password'=>Hash::make('1234'),
            'roles'=>'A',
            'company_id'=>1
        ]);
    }
}
