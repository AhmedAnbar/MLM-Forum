<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            'password' => bcrypt('123456'),
            'email' => 'admin@mlmforum.dev',
            'admin' => 1,
            'avatar' => asset('uploads/avatars/male_avatar.png')
        ]);

        App\User::create([
            'name' => 'Lamar Ahmed',
            'password' => bcrypt('123456'),
            'email' => 'Lolo@mlmforum.dev',
            'avatar' => asset('uploads/avatars/female_avatar.png')
        ]);
    }
}
