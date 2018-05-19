<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert(
 
            array (
                array(
                    'id' => 1,
                    'title' => 'Catégorie 1',
                    'description' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 2,
                    'title' => 'Catégorie 2',
                    'description' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 3,
                    'title' => 'Catégorie 3',
                    'description' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 4,
                    'title' => 'Catégorie 4',
                    'description' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                )
            )
        );
    
    }
}
