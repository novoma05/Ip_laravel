<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $peoples = User::all();
        return view('people.index', compact('peoples'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'sur_name' => 'required',
            'email' =>'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        $people = new User();
        $people->name = $request->input('name');
        $people->sur_name = $request->input('sur_name');
        $people->email = $request->input('email');
        $people->role = $request->input('role');
        $people->password = Hash::make($request->input('password'));
        $people->save();
        return redirect()->route('people.index')->with('success', 'People created successfully');
    }

    public function show(User $people)
    {
        return view('rooms.show', compact('room'));
    }
    public function edit($id)
    {
        $people = User::findorfail($id);        
        return view('people.edit', compact('people'));
    }

    public function update(Request $request,$id)
    {
        $people = User::findorfail($id);        
        $people->name = $request->input('name');
        $people->sur_name = $request->input('sur_name');
        $people->email = $request->input('email');
        $people->role = $request->input('role');
        if($request->input('password') != null){
        $people->password = Hash::make($request->input('password'));
        }
        $people->save();

        return redirect()->route('people.index')->with('success', 'People updated successfully');
    }

    public function destroy($id)
    {        
        $people = User::findorfail($id);        
        $people->delete();

        return redirect()->route('people.index')->with('success', 'People deleted successfully');
    }
}
