<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use PDF;
class UsersController extends Controller
{
    public function index()
    {
        $users = User::simplePaginate(9);
        return view('users.index',[
            "users" => $users
        ]);
    }
    public function create()
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
        ]);

        User::create($request->all());

        return redirect()->route("users.index");
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view("users.edit",[
            "user"  => $user
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email,$id",
            "password" => "nullable",
        ]);

        $user->update($request->all());

        return redirect()->route("users.index");
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function invoice()
    {
        return PDF::loadView('users.invoice')->download('invoice-'.time().'-data.pdf');
    }

    public function pdf()
    {
        return PDF::loadView('users.pdf',[
            "users" => User::all()
        ])->download('users-'.time().'-data.pdf');
    }
}
