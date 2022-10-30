<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Imports
use App\Models\User;

//Job Imports
use App\Jobs\UserCreated;
use App\Jobs\UserUpdated;
use App\Jobs\UserDeleted;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Creates the user model
        $user =  User::create($request->all());

        //event to tell sdg station that user was registered
        UserCreated::dispatch($user->toArray());

        return [
            "status" => 1,
            "data" => $user,
            "msg" => "User Created successfully."
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FInds specific user
        $user = User::find($id);



        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        //finds the user by id
        $user = User::find($id);
        //Updates the user model
        $user->update($request->all());

        UserUpdated::dispatch($user->toArray());

        return [
            "status" => 1,
            "data" => $user,
            "msg" => "User Updated successfully."
        ];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //finds and removes user from database
        $user = User::find($id);
        $user->delete();

        UserDeleted::dispatch($id);

        return [
            "status" => 1,
            "data" => $user,
            "msg" => "User deleted successfully."
        ];

    }
}
