<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class collectioncontroll extends Controller
{
    public function collection(){
        $collection= collect([
            [
                'user_id' => '1',
                'title' => 'Helpers in Laravel',
                'content' => 'Create custom helpers in Laravel',
                'category' => 'php'
            ],
            [
                'user_id' => '2',
                'title' => 'Testing in Laravel',
                'content' => 'Testing File Uploads in Laravel',
                'category' => 'php'
            ],
            [
                'user_id' => '3',
                'title' => 'Telegram Bot',
                'content' => 'Crypto Telegram Bot in Laravel',
                'category' => 'php'
            ],
        ]);

        $collection1 = collect([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);
        $collection2=collect(['name','age']);

        $collection3 = collect([1, 2, 3, 4, 5]);

        // all() method of collection
        // return $collection->all();

        //avg() method of collection
        // return $collection->avg('user_id');

        // chunk() method
        // return $collection->chunK(2);

        //collapse() method
        // $collapsed = $collection1->collapse();

        // return $collapsed->all();


        //combine() method
        // $combined=$collection2->combine(['George','29']);
        // return $combined->all();

        // filter() method
        // $filter = $collection->filter(function($value, $key) {
        //     if ($value['user_id'] == 2) {
        //         return true;
        //     }
        // });

        // return $filter->all();


        //search() method
        // return $collection2->search('age');

        //dump() method
        // $collection->dump();

        // map method
        // $multiplied = $collection3->map(function ($item, $key) {
        //     return $item * 2;
        // });

        // print_r($multiplied->all());

        // zip method
        // $zipped = $collection->zip([1, 2, 3]);
        // return $zipped->all();

        //wherenotin method
        // return $collection->whereNotIn('user_id', [1, 2]);

        //max method
        // return $collection->max('user_id');

        //pluck method
        // return $title=$collection->pluck('title');

        // forget method
        $colle = collect(['country' => 'usa', 'state' => 'ny']);
        // return $colle->forget('country')->all();

        //contains method
        return $colle->contains('usa');

    }
}
