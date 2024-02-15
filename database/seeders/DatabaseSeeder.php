<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Room::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        \App\Models\Booking::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = [
            [
                'name' => 'admin',
                'lname' => 'admin',
                'tel' => '0650763447',
                'username' => 'cheese',
                'email' => 'admin@admin.com',
                'sex' => 'man',
                'role' => '1',
                'password' => bcrypt('789456123'),

            ],
            [
                'name' => 'user',
                'lname' => 'user',
                'tel' => '0650763448',
                'username' => 'don',
                'email' => 'user@user.com',
                'sex' => 'man',
                'role' => '0',
                'password' => bcrypt('789456123'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
    
}
