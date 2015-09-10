<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\TimeEntry;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Model::unguard();
            
        // Call the seed classes to run the seeds
        $this->call('UsersTableSeeder');
        //$this->call('TimeEntriesTableSeeder');
    }

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
            
        // We want to delete the users table if it exists before running the seed
        DB::table('users')->delete();

        $users = array(
                ['name' => 'Ryan', 'email' => 'ryanchenkie@gmail.com', 'password' => Hash::make('secret')]
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}

