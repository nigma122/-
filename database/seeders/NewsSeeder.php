<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;
use Faker\Factory;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('new')->insert($this->getData());
    }

    public function getData(): array
    {
      $faker = Factory::create('ru_RU');
      $data = [];
      for($i=0; $i <10; $i++){
        $data [] = [
          'category_id' => 1,
          'title' => $faker->sentence(mt_rand(3,10)),
          'author' => $faker->userName(),
          'description' => $faker->text(mt_rand(100,200))
        ];
      }

      return $data;
    }

}
