<?php

use Illuminate\Database\Seeder;

class ArticleTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Article::class,20)->create();
    }
}
