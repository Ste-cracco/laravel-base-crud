<?php

use App\Comics;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics = config('comics');

        foreach($comics as $comic) {
            $comic = new Comics();

            $comic->title = 'title';
            $comic->description = 'description';
            $comic->thumb = 'thumb';
            $comic->price = 'price';
            $comic->series = 'series';
            $comic->sale_date = 'sale_date';
            $comic->type = 'type';

            $comic ->save();
        }
    }
}
