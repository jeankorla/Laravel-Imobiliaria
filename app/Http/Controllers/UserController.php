<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public readonly User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view('users', ['users' => $users]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = $this->user->find($id);
        
        return view('user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id', $id)->update($request->except(['_token', '_method']));

        if($updated)
        {
            return redirect()->back()->with('message', 'success updated');
        }
            return redirect()->back()->with('message', 'error updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $deleted = $this->user->where('id', $id)->delete($request->delete());

        if($deleted)
        {
            return redirect()->with('message', 'success deleted');
        }
            return redirect()->with('message', 'error deleted');
    }
}
