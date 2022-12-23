<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Post as PostResource;
   
class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
    
        return $this->sendResponse(PostResource::collection($posts), 'Posts retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'like' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $post = Post::create($input);
   
        return $this->sendResponse(new PostResource($post), 'Post created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
  
        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }
   
        return $this->sendResponse(new PostResource($post), 'Post retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $post->user_id = $input['user_id'];
        $post->title = $input['title'];
        $post->image = $input['image'];
        $post->description = $input['description'];
        $post->save();
   
        return $this->sendResponse(new PostResource($post), 'Post updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
   
        return $this->sendResponse([], 'Post deleted successfully.');
    }
}