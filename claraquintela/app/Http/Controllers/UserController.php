<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Privilege;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tri = $request->query("tri", 'name');
        $direction = $request->query('direction', 'asc');
        $privilege = $request->query("privilege");

        //Query démare une demande au modèle et doit finir avec get()
        $usersQuery = User::query();

        if ($privilege) {
            $usersQuery = $usersQuery->where("privilege_id", $privilege);
        }

        $usersQuery->orderBy($tri, $direction, $privilege);
        $users = $usersQuery->get();
        $privileges = Privilege::all();
        return view('user.index', ["users" => $users, "title" => "User list", "privileges" => $privileges]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
