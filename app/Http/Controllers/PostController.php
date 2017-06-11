<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JobType;
use App\Post;
use App\user;
use Auth;

class PostController extends Controller
{

    
     public function search(Request $keyword)
    {

        $result_search = Post::where('name',$keyword->get('keyword'))->orWhere('description','like','%'.$keyword->get('keyword').'%')->orWhere('location','like','%'.$keyword->get('keyword').'%')->orWhere('salary',$keyword->get('keyword'))->get();
            


        return view('posts.index')->with('posts',$result_search);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $jobtypes = JobType::lists('type','id');

        return view('posts.create')->with('jobtypes',$jobtypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $user =Auth::user();
        $jobtype = JobType::find($request->get('job_type'));

        $post = new Post;
        $post->name = $request->get('name');

        $post->startTime = $request->get('startTime');

        $post->endTime = $request->get('endTime');

        $post->location = $request->get('location');

        $post->vacancy = $request->get('vacancy');
        $post->salary = $request->get('salary');
        $post->description = $request->get('description');

        

        $post->job_type = JobType::find($request->get('job_type'))->id;
        $post->post_by = Auth::user()->id;

        $post->save();

        return \Redirect::route('posts.show',array($post->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);

        $jobtype = JobType::lists('type','id');

        return view('posts.edit')->with(array('post'=>$post,'jobtype'=>$jobtype));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->update($request->all());
        return \Redirect::route('posts.show',array($post->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);

        $post->delete();

        return \Redirect::route('posts.index');
    }


   
}
