<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();

        factory(User::class)->create([
            'name' => 'Eimantas Kateiva',
            'email' => 'eimantas@kateiva.lt',
        ]);

        factory(User::class, 10)->create();
    }
}
