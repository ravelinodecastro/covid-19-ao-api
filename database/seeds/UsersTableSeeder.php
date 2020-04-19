<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = ([
            [
                'name'=>'Ravelino de Castro',
                'email'=>'ravelinodecastro@gmail.com',
                'password' => Hash::make('angolaoddd'),
               // 'password' => Hash::make('stop_being_curious'),
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
        ]);
      
        User::insert($users);
  
    }
}