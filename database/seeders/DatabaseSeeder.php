<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();

    $user = User::factory()->create([
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'password' => bcrypt('123456789'),
    ]);

         Listing::factory(6)->create([
            'user_id' => $user->id,
         ]);

        //  Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags'=> 'Laravel, Javascript',
        //     'Company'=> 'Acme Corp',
        //     'location'=> 'Lagos, Nigeria',
        //     'email'=> 'email1@email.com',
        //     'website'=> 'https://www.acme.com',
        //     'description'=> 'Lorem ipsum dolor 
        //     sit amet, consectetur adipisci elit, 
        //     sed eiusmod tempor incidunt ut labore et 
        //     dolore magna aliqua. Ut enim ad minim veniam, 
        //     quis nostrum exercitationem ullam corporis suscipit 
        //     laboriosam, nisi ut aliquid ex ea commodi consequatur. 
        //     Quis aute iure reprehenderit in voluptate velit esse 
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint 
        //     obcaecat cupiditat non proident, sunt in culpa qui officia 
        //     deserunt mollit anim id est laborum',
        //  ]);

        //  Listing::create([
        //     'title' => 'Full-stack Engineer',
        //     'tags'=> 'Laravel, Backend, api',
        //     'Company'=> 'GMX Technologies',
        //     'location'=> 'Abuja, Nigeria',
        //     'email'=> 'email2@email.com',
        //     'website'=> 'https://www.gmxmedia.com',
        //     'description'=> 'Lorem ipsum dolor 
        //     sit amet, consectetur adipisci elit, 
        //     sed eiusmod tempor incidunt ut labore et 
        //     dolore magna aliqua. Ut enim ad minim veniam, 
        //     quis nostrum exercitationem ullam corporis suscipit 
        //     laboriosam, nisi ut aliquid ex ea commodi consequatur. 
        //     Quis aute iure reprehenderit in voluptate velit esse 
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint 
        //     obcaecat cupiditat non proident,',
        //  ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
