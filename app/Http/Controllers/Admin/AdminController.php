<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.userPanel', ['users' => User::all()]);
    }

    public function edit(User $user)
    {
        return view('admin.edit', [
            'user' => $user,
            'title' => trans('titles.user.edit', ['data' => $user->email])
        ]);
    }

    public function create ()
    {
        return view('admin.create');
    }

    public function save(Request $request)
    {

        $validatedData = $request->validate([
            'gender' => 'required |in:'.implode(',', [User::GENDER_DIVERS, User::GENDER_FEMALE, User::GENDER_MALE]),
            'firstName' => 'required | string| max:255',
            'lastName' => 'required | string| max:255',
            'email' => 'required | string | email | max:255 | unique:users',
            'is_admin' => 'required | in:'.implode(',',[User::USER_ADMIN, User::USER_NOADMIN]),
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect(route('user-panel'));

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

        return redirect(route('user-panel'));

    }

    public function delete(User $user)
    {
        dd($user);

        $user->delete();
    }
}
