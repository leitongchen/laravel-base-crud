<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comic::truncate();
        
        $comicsList = config('comics');

        foreach ($comicsList as $comic) {


            $comicNew = new Comic(); 

            $comicPrice = 0;
            // var_dump(strpos($comic['price'], "$"));

            if (strpos($comic['price'], "$") >= 0) {

                $comicPrice = str_replace("$", "", $comic['price']);
                // dump($comic['price']);
            }
            

            $comicNew->fill($comic);

            $comicNew->price = $comicPrice;

            $comicNew->save(); 

        }
    }
}
