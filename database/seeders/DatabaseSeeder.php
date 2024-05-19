<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\CustomFieldSeeder;
use Database\Seeders\LeadSourceSeeder;
use Database\Seeders\PipelineStageSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Edson Tomas',
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1196966476.
            'email' => 'edsonn89@gmail.com',
            'password' => bcrypt('1234567890'),
        ]);

        $this->call(TagSeeder::class);
        $this->call(CustomFieldSeeder::class);
        $this->call(PipelineStageSeeder::class);
        $this->call(LeadSourceSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
