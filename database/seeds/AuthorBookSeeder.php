<?php

use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Biblios\Author::class, 10)->create()->each(function($author) 
        {
        	foreach(range(1, 10) as $i) 
        	{
        		$author->books()->save(factory(Biblios\Book::class)->make());
        	}
        });
    }
}
