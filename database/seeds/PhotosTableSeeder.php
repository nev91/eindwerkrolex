<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        App\Photo::create(['file'=>'cellini.jpg']);
        App\Photo::create(['file'=>'datejust.jpg']);
        App\Photo::create(['file'=>'daydate.jpg']);
        App\Photo::create(['file'=>'skydweller.jpg']);
        App\Photo::create(['file'=>'pearlmaster.jpg']);
        App\Photo::create(['file'=>'airking.jpg']);
        App\Photo::create(['file'=>'cosmographdaytona.jpg']);
        App\Photo::create(['file'=>'milgauss.jpg']);
        App\Photo::create(['file'=>'seadweller.jpg']);
        App\Photo::create(['file'=>'submariner.jpg']);
    }
}
