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
        factory(App\Models\User::class)->create([
            'name' => "Admin",
            'email' => "admin@blog.com",
            'password' => bcrypt('secret')
        ]);
    }
}
