<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Profile;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $user = User::create([
       'name' => 'Administrator',
       'email' => 'admin@mdf.gov.mw',
       'role' => 1,
       'password' => bcrypt('MDF@2023')

     ]);

    Profile::create([

       'picture' => 'profile.png',
       'user_id' => $user->id,
       'about' => 'The web master/system administrator'
      ]);
    }
}