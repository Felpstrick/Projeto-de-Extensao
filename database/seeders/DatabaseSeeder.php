<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'teste@exemplo.com'],
            ['name' => 'Teste', 'password' => 'senha12345']
        );
    }
}