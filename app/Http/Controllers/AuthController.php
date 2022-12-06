<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authentication(Request $request)
    {
        return response()->json([
            "token" => "holaquetalcomoteva"
            // "data" => $request->all()
        ]);
    }
}
