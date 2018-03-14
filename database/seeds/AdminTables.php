<?php

use Illuminate\Database\Seeder;
use App\Key;
use App\User;

class AdminTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keys = new Key;
        $keys->login = 1;
        $keys->dropdownLogin = 1;
        $keys->soon = 1;
        $keys->save();

        // Create Admin Users
        $user1 = new User;
        $user1->name = 'Apostolos Siokas';
        $user1->email = 'apostolos@schol.io';
        $user1->password = 'Scholio13apostolos';
        $user1->role = 'admin';
        $user1->status = 'admin';
        $user1->username = 'siokas';
        $user1->save();

        $user1 = new User;
        $user1->name = 'Kostis Freiderikos';
        $user1->email = 'kostis@schol.io';
        $user1->password = 'Scholio13kostis';
        $user1->role = 'admin';
        $user1->status = 'admin';
        $user1->username = 'kfrei';
        $user1->save(); 
    }
}
