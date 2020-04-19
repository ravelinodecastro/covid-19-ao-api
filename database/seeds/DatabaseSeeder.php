<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConfigsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TipsTableSeeder::class);
        $this->call(TipTranslationsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryTranslationsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ServiceTranslationsTableSeeder::class);
    }
}
