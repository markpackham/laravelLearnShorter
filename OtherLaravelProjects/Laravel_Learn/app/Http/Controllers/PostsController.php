<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//We can use model functions with this
use App\Post;
//For SQL queries
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //stop access to pages with some exceptions
        $this->middleware('auth', ['except' => 'index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //If you wanted to use SQL you would do
        //$posts = DB::select('SELECT * FROM posts');

        //Fetch all data in the table in an array
        //return Post::all();

        //$posts = Post::where('title','Post Two')->get();

        //We can limit posts so only one is shown via "take"
        //$posts = Post::orderBy('updated_at', 'desc')->take(1)->get();

        //Show most recent post first
        //$posts = Post::orderBy('updated_at', 'desc')->get();

        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation in laravel is very simple, we will use the view inc.messages
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            //Users don't always have to upload images but those images must be less than 2MB
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image, it will be placed in our public folder but we need to create a sybolic link to make it viewable on the right page
            //php artisan storage:link this will say "The [public/storage] directory has been linked."
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            //put this in database as default if no image uploaded
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        //Now we have authentication enabled we can get the user id
        //$post->user_id = auth()->user()->id;
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //We are reusing some code from "show"
        $post = Post::find($id);

        //Check for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', "You don't have permission to edit this");
        }
        return view('posts.edit')->with('post', $post);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation in laravel is very simple, we will use the view inc.messages
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image, it will be placed in our public folder but we need to create a sybolic link to make it viewable on the right page
            //php artisan storage:link this will say "The [public/storage] directory has been linked."
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        //This is like store() but we need to find a post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', "You don't have permission to edit this");
        }

        if($post->cover_image != 'noimage.jpg'){
//Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Updated');
    }
}
