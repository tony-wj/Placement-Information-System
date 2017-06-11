<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\UserType;
use App\Company;
use App\CompanyField;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $profiles = User::all();

        return view('profile.index')->with('profiles',$profiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $type = UserType::lists('name','id');

        return view('lists.create')->with('type',$type);
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
        $type = UserType::find($request->get('user_type'));

        $profile = new User;

        $profile->username = $request->get('username');

        $profile->firstName = $request->get('firstName');

        $profile->lastName = $request->get('lastName');

        $profile->mobile = $request->get('mobile');

        $profile->user_type()->associate($type);

        $profile->user()->associate($user);

        $profile->save();

        return \Redirect::route('lists.show',array($list->id));
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
        $profile = User::find($id);

        return view('profile.show')->with('profile',$profile);
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
        $profile = User::find($id);

        $type = UserType::lists('name','id');

        return view('profile.edit')->with(array('profile'=>$profile,'type'=>$type));
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
        $profile = User::find($id);
        $profile->update($request->all());
        return \Redirect::route('profile.show',array($profile->id));
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
        $profile = User::find($id);

        $profile->delete();

        return \Redirect::route('profile.index');
    }
}
