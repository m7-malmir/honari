<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret'
        ]);
    }
}

