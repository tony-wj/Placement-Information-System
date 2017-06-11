<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\PersonalInfo;
use App\InfoType;
use Auth;


class InfoController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $infos = PersonalInfo::all();
        return view('info.index')->with('info',$infos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $infotype = InfoType::lists('name','id');
        return view('info.create')->with('infotype',$infotype);
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
        $infotype = InfoType::find($request->get('type_id'));

        $info = new PersonalInfo;

        $info->name = $request->get('name');

        $info->description = $request->get('description');

        $info->type_id = InfoType::find($request->get('type_id'))->id;
        $info->user_id = Auth::user()->id;

        $info->save();

        return \Redirect::route('info.show',array($info->id));
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
        $info = PersonalInfo::find($id);

        return view('info.show')->with('info',$info);
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
        $info = PersonalInfo::find($id);

        $infotype = InfoType::lists('name','id');

        return view('info.edit')->with(array('info'=>$info,'infotype'=>$infotype));
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
        $info = PersonalInfo::find($id);
        $info->update($request->all());
        return \Redirect::route('info.show',array($info->id));
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
        $info = PersonalInfo::find($id);

        $info->delete();

        return \Redirect::route('info.index');
    }


     public function search(Request $keyword)
    {
        $result_search = PersonalInfo::where('name','like','%'.$keyword->get('keyword').'%')->orWhere('description','like','%'.$keyword->get('keyword').'%')->get();

        return view('info.index')->with('info',$result_search);
    }
    
}
