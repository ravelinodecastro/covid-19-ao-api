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

             //Start Fintech
             [
                'name' => 'Fintech',
                'category_id'=> '3',
                'locale'=> 'pt',
            ],
            [
                'name' => 'Fintech',
                'category_id' => '3',
                'locale' => 'en',
            ],
            [
                'name' => 'Fintech',
                'category_id'=> '3',
                'locale'=> 'es',
            ],
            [
                'name' => 'Fintech',
                'category_id'=>'3',
                'locale'=> 'fr',
            ],
            //End Fintech

             //Start Delivery
             [
                'name' => 'Entregas',
                'category_id'=> '4',
                'locale'=> 'pt',
            ],
            [
                'name' => 'Delivery',
                'category_id' => '4',
                'locale' => 'en',
            ],
            [
                'name' => 'La entrega',
                'category_id'=> '4',
                'locale'=> 'es',
            ],
            [
                'name' => 'La livraison',
                'category_id'=>'4',
                'locale'=> 'fr',
            ],
            //End Delivery
           
        ]);

        CategoryTranslation::insert($categories_translations);
    }
}