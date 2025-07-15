<?php

namespace Database\Seeders;

use Database\Seeders\TaskSeeder;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(['email' => 'zramos@mail.com'], [
            'name'          => 'Zehiael Ramos',
            'email'         => 'zramos@mail.com',
            'password'      => bcrypt('password'),
        ]);

        $this->call([
            # UserSeed::class,
            TaskSeeder::class,
        ]);
    }
}
