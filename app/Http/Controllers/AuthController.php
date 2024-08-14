<?php

namespace App\Http\Controllers;

use App\Http\Requests\APILoginRequest;
use App\Traits\APIResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use APIResponses;
    public function login(APILoginRequest $request)
    {
        return $this->ok($request->get('email'));
    }

    public function register()
    {
        return $this->ok('Register here please...');
    }
}
