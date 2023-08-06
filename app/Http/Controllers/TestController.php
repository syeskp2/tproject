<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
    Contact,
    Post,
    Category,
    Country,
    Video,
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

        // $categories = Category::all();
        // $post = Post::with('categories')->first();

        // $post->categories()->attach($categories);
        // // $post->categories()->sync([1,2]);
        // // $post->categories()->detach([1,2]);

        // $post = Post::with('categories')->first();

        // dd($post->toArray());


        // Has One Through

        // // $user = User::with('contact')->first();
        // // $user = User::with('contact.contactinformation')->first();
        // $user = User::with('contactContactinformation')->first();

        // dd($user->toArray());


        // Has Many Through

        // // $country = Country::first();
        // // $country = Country::with('states')->first();
        // // $country = Country::with('states.cities')->first();
        // $country = Country::with('stateCity')->first();

        // dd($country->toArray());


        // One To One (Polymorphic)

        // // $user = User::with('image')->first();
        // // $user = User::with('image')->get();
        // $post = Post::with('image')->get();

        // // dd($user->toArray());
        // dd($post->toArray());


        // One To Many (Polymorphic)
        
        // // $post = Post::with('image')->get();
        // $post = User::with('image')->get();
        
        // dd($post->toArray());

        // Many To Many (Polymorphic)
        
        // $post = Post::first();
        // $post = Post::with('tags')->first();
        $video = Video::with('tags')->first();

        // dd($post->toArray());
        dd($video->toArray());
    }
}
