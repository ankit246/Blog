<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         factory(App\Models\Home::class)->create();
         factory(App\Models\About::class)->create();
         factory(App\Models\Contact::class)->create();
         factory(App\Models\Post::class)->create();
    }
}
