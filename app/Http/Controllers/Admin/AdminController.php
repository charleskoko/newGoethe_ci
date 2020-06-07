<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.userPanel', ['users' => User::all()]);
    }

    public function edit(User $user)
    {
        return view('admin.edit', [
            'user' => Auth::user(),
            'title' => trans('titles.user.edit', ['data' => Auth::user()->email])
        ]);
    }

    public function create ()
    {
        return view('admin.create');
    }

    public function update(Request $request, User $user)
    {

        $validatedData = $request->validate([
            'gender' => 'required |in:'.implode(',', [User::GENDER_DIVERS, User::GENDER_FEMALE, User::GENDER_MALE]),
            'firstName' => 'required | string| max:255',
            'lastName' => 'required | string| max:255',
            'email' => 'required | string | email | max:255 | unique:users,email,' . $user->id,
        ]);

        $user->update($validatedData);

        return redirect(route('profile-view'));

    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
