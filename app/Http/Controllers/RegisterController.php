<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class RegisterController extends Controller {
    public function index(Request $request)
    {
        if(session('bo_id')) {
            return redirect('/');
        }

        return view('register');
    }
}