<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(ContactFormRequest $request){

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required|min:5'
        // ]);

        // notify admin
        //db
        // dd($request->all());

        return back()->with('success', 'form submitted successfully');
    }
}
