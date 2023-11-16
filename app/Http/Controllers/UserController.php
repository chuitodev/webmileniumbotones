<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Rules\Password;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::all();
        } catch(\Exception $e) {
            return back()->with('exception', $e->getMessage());
        }

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed'],
            'status' => ['required', 'string', 'max:10'],
            'role' => ['required', 'string', 'max:15']
        ]);

        try {
            User::create([
                'name' =>  $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'role' => $request->role
            ]);
        } catch (\Exception $e) {
            return back()->with('exception', $e->getMessage());
        }

        return back()->with('success', 'Usuario creado');
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
        try {
            $user = User::findOrFail($id);
        } catch (\Exception $e) {
            return back()->with('exception', $e->getMessage());
        }

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed'],
            'status' => ['required', 'string', 'max:10'],
            'role' => ['required', 'string', 'max:15']
        ]);

        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
        } catch (\Exception $e) {
            return back()->with('exception', $e->getMessage());
        }

        return back()->with('success', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::destroy($id);
        } catch (\Exception $e) {
            return back()->with('exception', $e->getMessage());
        }

        return redirect()->route('user.index')->with('success', 'Usuario eliminado');
    }
}
