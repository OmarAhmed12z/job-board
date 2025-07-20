<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   function index (){
    //Eloquent ORM -> get all data from table
    $data =tag::all();
    //pass the data to the view
    return view('tag.index',['tags'=> $data, 'pageTitle'=>'Tags']);
   }

   function create(){
      tag::create([
        'title' => 'CSS',

    ]);
    return redirect('/tags');
   }

  public function testManyToMany(){

    // $post3 = Post::find(3);
    // $post4 = Post::find(4);

    // $post3->tags()->attach([1, 3]);
    // $post4->tags()->attach([1]);

    // return response()->json(([
    //     "post3" => $post3->tags,
    //     "post4" => $post4->tags
    // ]));

    $tag = tag::find(3);

    $tag->posts()->attach([7]);

    return response()->json(([
        "tag" => $tag->title,
        "posts" => $tag->posts
    ]));
  }
}
