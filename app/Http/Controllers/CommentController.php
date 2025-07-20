<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use HasFactory;
   function index (){
    //Eloquent ORM -> get all data from table
    $data = comment::all();
    //pass the data to the view
    return view('comment.index',['comments'=> $data, 'pageTitle'=>'Blog']);
   }

   function create(){
    //    comment::create([
    //     'author' => 'omar',
    //     'content' => 'this is the test comment',
    //     'post_id' => 1
    // ]);

    Comment::factory(100)->create();
    return redirect('/comments');
   }
}
