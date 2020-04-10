<?php

use Illuminate\Database\Seeder;
use App\Models\CategoryTranslation;
use Carbon\Carbon;
class CategoryTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $categories_translations = ([
            //Start Transport
            [
                'name' => 'Transporte',
                'category_id'=> '1',
                'locale'=> 'pt',
            ],
            [
                'name' => 'Transport',
                'category_id' => '1',
                'locale' => 'en',
            ],
            [
                'name' => 'Transporte',
                'category_id'=> '1',
                'locale'=> 'es',
            ],
            [
                'name' => 'Transport',
                'category_id'=> '1',
                'locale'=> 'fr',
            ],
            //End Transport

            //Start E-commerce
            [
                'name' => 'Loja virtual',
                'category_id'=> '2',
                'locale'=> 'pt',
            ],
            [
                'name' => 'E-commerce',
                'category_id' => '2',
                'locale' => 'en',
            ],
            [
                'name' => 'Comercio electrónico',
                'category_id'=> '2',
                'locale'=> 'es',
            ],
            [
                'name' => 'Commerce Électronique',
                'category_id'=>'2',
                'locale'=> 'fr',
            ],
            //End E-commerce
           
        ]);

        CategoryTranslation::insert($categories_translations);
    }
}