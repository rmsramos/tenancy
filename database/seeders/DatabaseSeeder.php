<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $tenacy = Hospital::create([
            'name' => 'Tenancy 01',
            'slug' => 'tenancy-01',
        ]);

        $user->hospitals()->attach($tenacy);
    }
}
