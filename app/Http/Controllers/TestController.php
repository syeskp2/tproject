<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
    Contact,
    Post,
    Category,
};
use Illuminate\Http\Request;

class TestController extends Controller
{
    // for one to one relationship
    public function index(){
        // $user = User::first();
        // $user = User::with('contact')->first();

        // return $user;
        // return $user->contact;
        //  return dd($user->toArray());

        // $user = Contact::with('user')->first();
        // dd($user->toArray());


        // has many

        // $user = User::with(['contact', 'posts'])->find(1);

        // $post = Post::with('user')->first();

        // return $user->toArray();
        // return dd($user->toArray());

        // return dd($post->toArray());


        //many to many

        $categories = Category::all();
        $post = Post::with('categories')->first();

        $post->categories()->attach($categories);
        // $post->categories()->sync([1,2]);
        // $post->categories()->detach([1,2]);

        $post = Post::with('categories')->first();

        dd($post->toArray());
    }
}
