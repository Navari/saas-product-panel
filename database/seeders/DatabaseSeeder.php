<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $company = Company::create([
            'name' => 'Poshta',
            'slug' => 'poshta',
            'email' => 'c@poshta.ua',
            'phone' => '+380 67 123 45 67',
            'address' => 'Ukraine, Kyiv, 01001, Khreshchatyk, 1',
            'city' => 'Kyiv',
            'state' => 'Kyiv',
            'country' => 'Ukraine',
            'zip' => '01001',
            'currency' => 'UAH',
            'timezone' => 'Europe/Kiev',
            'language' => 'en',
            'status' => 'demo',
            'theme' => 'standard'
        ]);

         \App\Models\User::factory()->create([
             'name' => 'Celalettin YILMAZ',
             'email' => 'c@poshta.ua',
             'password' => bcrypt('123456'),
             'company_id' => $company->id
         ]);
    }
}
