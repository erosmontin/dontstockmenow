<?php

namespace App\Http\Controllers;

use App\Cloudapp;
use App\User;
use Illuminate\Http\Request;

class CloudappsController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cloudapps = Cloudapp::paginate(8);

        return view('cloudapp.index',compact('cloudapps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(User $user)
    {
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
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


    /**
     * Start the app for the user
     *
     * @param  int $cloudapp
     * @return view
     */
    public function startup(Cloudapp $cloudapp)
    {
        $user=auth()->user();
        $url=$cloudapp->startlink . "{\"UID\":212,\"name\":\"{$user->name}\",\"surname\":\"$user->lastname\",\"admin\":false,\"logged\":true,\"email\":\"$user->email\",\"subdetails\":\"Columbia College (SC)\"}";
        return view('external.work',compact('url'));
    }
}
