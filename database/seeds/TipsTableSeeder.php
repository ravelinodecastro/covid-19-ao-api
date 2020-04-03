<?php

use Illuminate\Database\Seeder;
use App\Models\Tip;
use Carbon\Carbon;
class TipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tips = ([
            [
                'image'=> 'lavarasmaos.jpg',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'image'=> 'mascara.jpg',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'image'=> 'temperatura.jpg',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'image'=> 'multidoes.jpg',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'image'=> 'tocarnorosto.jpg',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
           
        ]);
      
        Tip::insert($tips);
  
    }
}