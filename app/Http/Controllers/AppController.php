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
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class AppController extends Controller {

    public function index(Request $request)
    {
        $data = [
            'title' => 'Public History',
            'post'  => Post::all()
        ];

        return view('main',$data);
    }

    public function create(Request $request){
        $validation = Validator::make($request->all(), [
            'title'          => 'required',
            'description'	 => 'required',
            'filehistory' 	 => 'required',
        ], [
            'title.required'          => 'Title cannot be empty.',
            'description.unique'      => 'Description cannot be empty.',
            'filehistory'             => 'Image cannot be empty.'
        ]);

        if($validation->fails()) {
            $response = [
                'status' => 422,
                'error'  => $validation->errors()
            ];
        } else {
            if($request->temp){

            }else{
                $image = $request->file('filehistory')->store('public/posts');

                $response = Http::withToken(session('bo_token'))->post('http://localhost/api/posts', [
                    'user_id'       => session('bo_id'),
                    'title'         => $request->title,
                    'image'         => $image,
                    'description'   => $request->description,
                    'like'          => 0
                ]);
                
                $result = json_decode($response->getBody()->getContents());

                if($result->success){
                    $response = [
                        'status' 	=> 200,
                        'message'	=> 'Successfull add new History.'
                    ];
                }else{
                    $response = [
                        'status' 	=> 500,
                        'message'	=> 'Ups, something wrong.'
                    ];
                }
            }
        }

        return response()->json($response);
    }
}