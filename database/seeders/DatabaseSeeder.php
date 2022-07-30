<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//         \App\Models\Contact::factory(10)->create();
//        $this->call([
//            ContactTableSeeder::class,
//            CompaniesTableSeeder::class,
//        ]);
//        $user = User::factory()->count(5)->create();
//        $user->each



        \App\Models\Company::factory()
            ->count(10)
            ->create()->each(function ($company){
                $company->contacts()->saveMany(
                    \App\Models\Contact::factory()
                        ->count(rand(5,10))
                        ->make()
                );
            });
    }
}
