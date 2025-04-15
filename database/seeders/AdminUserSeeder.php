<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@scaffold.it'],
            [
                'name' => 'Admin',
                'password' => Hash::make('1backdoor2big'),
            ]
        );
    }
}
