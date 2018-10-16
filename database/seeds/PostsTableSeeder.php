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
            array(
                [
                    'title' => 'Title 1',
                    'alias' =>'php_is_awesome',
                    'intro' => 'some text',
                    'body' => 'some body'
                ],
                [
                    'title' => 'Title 2',
                    'alias' =>'Title_2',
                    'intro' => 'some text',
                    'body' => 'some body'
                ],
                [
                'title' => 'Title 3',
                 'alias' =>'Title_3',
                'intro' => 'some text',
                'body' => 'some body'
                ]
            )

       );

    }
}
