<?php

use Illuminate\Database\Seeder;
use App\Models\TipTranslation;
use Carbon\Carbon;
class TipTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $tips_translations = ([
            [
                'title' => 'Lave as mãos',
                'body' => 'Lave as mãos',
                'tip_id'=> '1',
                'locale'=> 'pt',
            ],
            [
                'title' => 'Wash your hands',
                'body' => 'Wash your hands',
                'tip_id' => '1',
                'locale' => 'en',
            ],
            [
                'title' => 'Lava tus manos',
                'body' => 'Lava tus manos',
                'tip_id'=> '1',
                'locale'=> 'es',
            ],
            [
                'title' => 'Lavez-vous les mains',
                'body' => 'Lavez-vous les mains',
                'tip_id'=> '1',
                'locale'=> 'fr',
            ],
            [
                'title' => 'Use máscaras de proteção adequadamente',
                'body' => 'Use máscaras de proteção adequadamente',
                'tip_id'=> '2',
                'locale'=> 'pt',
            ],
            [
                'title' => 'Wear protective masks properly',
                'body' => 'Wear protective masks properly',
                'tip_id'=> '2',
                'locale'=> 'en',
            ],
            [
                'title' => 'Use máscaras protectoras adecuadamente',
                'body' => 'Use máscaras protectoras adecuadamente',
                'tip_id'=> '2',
                'locale'=> 'es',
            ],
            [
                'title' => 'Portez correctement des masques de protection',
                'body' => 'Portez correctement des masques de protection',
                'tip_id'=> '2',
                'locale'=> 'fr',
            ],
            [
                'title' => 'Verifique sua temperatura regularmente',
                'body' => 'Verifique sua temperatura regularmente',
                'tip_id'=> '3',
                'locale'=> 'pt',
            ],
            [
                'title' => 'Check your temperature regularly',
                'body' => 'Check your temperature regularly',
                'tip_id'=> '3',
                'locale'=> 'en',
            ],
            [
                'title' => 'Controle su temperatura regularmente',
                'body' => 'Controle su temperatura regularmente',
                'tip_id'=> '3',
                'locale'=> 'es',
            ],
            [
                'title' => 'Vérifiez régulièrement votre température',
                'body' => 'Vérifiez régulièrement votre température',
                'tip_id'=> '3',
                'locale'=> 'fr',
            ],
            [
                'title' => 'Evite grandes multidões',
                'body' => 'Evite grandes multidões',
                
                'tip_id'=> '4',
                'locale'=> 'pt',
            ],
            [
                'title' => 'Avoid large crowds',
                'body' => 'Avoid large crowds',
                
                'tip_id'=> '4',
                'locale'=> 'en',
            ],
            [
                'title' => 'Evitar grandes multitudes',
                'body' => 'Evitar grandes multitudes',
                
                'tip_id'=> '4',
                'locale'=> 'es',
            ],
            [
                'title' => 'Évitez les grandes foules',
                'body' => 'Évitez les grandes foules',
                
                'tip_id'=> '4',
                'locale'=> 'fr',
            ],
            [
                'title' => 'Nunca toque seu rosto com as mãos sujas',
                'body' => 'Nunca toque seu rosto com as mãos sujas',
                'tip_id'=> '5',
                'locale'=> 'pt',
            ],
            [
                'title' => 'Never touch your face with dirty hands',
                'body' => 'Never touch your face with dirty hands',
                'tip_id'=> '5',
                'locale'=> 'en',
            ],
            [
                'title' => 'Nunca te toques la cara con las manos sucias',
                'body' => 'Nunca te toques la cara con las manos sucias',
                'tip_id'=> '5',
                'locale'=> 'es',
            ],
            [
                'title' => 'Ne touchez jamais votre visage avec des mains sales',
                'body' => 'Ne touchez jamais votre visage avec des mains sales',
                'tip_id'=> '5',
                'locale'=> 'fr',
            ],
           
        ]);

        TipTranslation::insert($tips_translations);
    }
}