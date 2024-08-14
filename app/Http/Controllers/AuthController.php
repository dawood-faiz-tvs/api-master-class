<?php

namespace App\Http\Controllers;

use App\Traits\APIResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use APIResponses;
    public function login()
    {
        return $this->ok('HELLO LOGIN!');
    }
}
