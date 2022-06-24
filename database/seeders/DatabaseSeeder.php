<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Discussion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = array('user', 'manager');

        \App\Models\User::factory(5)->create();

        Discussion::factory(1)->create();

        foreach(Discussion::all() as $discussion){
            foreach(User::all() as $user){
                $user_id = $user->id;
                // Role aleatoire + conversion str -> array
                $role = $roles[array_rand($roles, 1)];
                $discussion->users()->attach($user_id, [
                    'role' => $role,
                    'notifications' => 0
                ]);
            }
        }
    }
}
