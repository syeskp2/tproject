<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie()
    {
        Cookie::queue('test-cookie', 'Setting Cookie from ItSolutionStuff.com', 120);
  
        return response()->json(['Cookie set successfully.']);
    }

    // public function setCookie()
    // {
    //     return response()->json(['Cookie set successfully.'])->cookie(
    //         'test-cookie-2', 'Demo 2', 120
    //     );
    // }

    public function getCookie(Request $request)
    {
        $value = Cookie::get('test-cookie');
        dd($value);
    }

    // public function getCookie(Request $request)
    // {
    //     $value2 = $request->cookie('test-cookie-2');
    //     dd($value2);
    // }

    public function deleteCookie()
    {
        Cookie::forget('test-cookie');
        Cookie::forget('test-cookie-2');
  
        dd('Cookie removed successfully.');
    }
}
