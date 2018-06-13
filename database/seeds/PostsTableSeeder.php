<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(

array([
         'title'=>"Php is awesome",
         'intro'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",

         'body'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit."

      ],
      [
         'title'=>"Проскуряков Валерий",
         'intro'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",

         'body'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit."

      ],
      [
         'title'=>"Мой блог",
         'intro'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",

         'body'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit."

      ]
   )

        );


        
    }
}
