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


class AuthController extends Controller {

    public function login(Request $request)
    {
        if(session('bo_id')) {
            return redirect('/');
        }

        return view('login');
    }
	
	public function auth(Request $request)
    {

        $response = Http::post('http://localhost/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $result = json_decode($response->getBody()->getContents());

        $token = $result->data->token;

        if($result->success){
            $user = User::where('email', $request->email)->first();

            if($user) {
                if(Hash::check($request->password, $user->password)) {

                    $user->update([
                        'token'    => $token
                    ]);

                    session([
                        'bo_id'     => $user->id,
                        'bo_name'   => $user->name,
                        'bo_email'  => $user->email,
                        'bo_token'  => $token,
                    ]);
                    
                    $response = [
                        'status' 	=> 200,
                        'message'	=> 'Successfull logged in. Please wait!'
                    ];

                } else {
                    $response = [
                        'status' 	=> 422,
                        'message'	=> 'Account not found'
                    ];
                }
            }
        }else{
            $response = [
                'status' 	=> 422,
                'message'	=> 'Account not found'
            ];
        }

        return response()->json($response);
    }

    public function logout(){

        $user = User::where('token',session('bo_token'))->first();

        if($user){
            $user->update([
                'token' => NULL
            ]);
        }

        session()->flush();
        return redirect('/login');
    }
}