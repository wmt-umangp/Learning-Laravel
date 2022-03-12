<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Uuser;
use App\Models\Image;
class polymorph extends Controller
{
    public function oneonepolym()
    {

       $post = Post::find(1);
       return $post->image;

    //    $uuser = Uuser::find(1);
    //    return $uuser->image;

    //    $Post1 = Post::find(2);
    //    return $Post1->image;
    }
}
