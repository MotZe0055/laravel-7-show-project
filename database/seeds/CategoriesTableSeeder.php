<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table('categories')->insert([
           [    'user_id'=>'1',
                'name' => 'Laravel',
                'slug' => 'laravel',
                'is_published' =>'1',
                'created_at' => Carbon :: now(),
                'updated_at' => Carbon :: now()
            ],
            [   'user_id'=>'2',
                'name' => 'Maravel',
                'slug' => 'maravel',
                'is_published' =>'1',
                'created_at' => Carbon :: now(),
                'updated_at' => Carbon :: now()
            ],
            [   'user_id'=>'3',
                'name' => 'Naravel',
                'slug' => 'naravel',
                'is_published' =>'1',
                'created_at' => Carbon :: now(),
                'updated_at' => Carbon :: now()
            ]
        ]);
    }
}
