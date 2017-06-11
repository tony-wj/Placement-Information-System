<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApplicationStatus;
use App\ApplicationInfo;
use App\Application;
use App\Post;
use Auth;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $applys = Application::all();
        return view('apply.index')->with('applys',$applys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $post = Post::lists('name','id');

        return view('apply.create')->with('post',$post);
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

        $apply = new Application;
        $applyinfo = new ApplicationInfo;

        $applyinfo->resume = $request->get('resume');
        $applyinfo->cover_letter = $request->get('cover_letter');
        $applyinfo->save();

        $apply->info_id= $applyinfo->id;

        $apply->post_id = Post::find($request->get('post_id'))->id;

        $apply->user_id = Auth::user()->id;
        $apply->status_id = '3';


        $apply->save();

        return \Redirect::route('apply.show',array($apply->id));
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
         $apply = Application::find($id);

        return view('apply.show')->with('apply',$apply);
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
        $apply = Application::find($id);
        $applyinfo = ApplicationInfo::find($apply->info_id);

        return view('apply.edit')->with(array('apply'=>$apply,'applyinfo'=>$applyinfo));
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
        $apply = Application::find($id);
        $apply->update($request->all());
        return \Redirect::route('apply.show',array($apply->id));
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
    }
}
