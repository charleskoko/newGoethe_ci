<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function view()
    {
        return view('user.viewProfile', [
            'user' => Auth::user(),
            'title' => trans('titles.user.edit', ['data' => Auth::user()->email])
        ]);
    }
    public function edit()
    {
        return view('user.editProfile', [
                'user' => Auth::user(),
                'title' => trans('titles.user.edit', ['data' => Auth::user()->email])
            ]);
    }

    public function newPassword(User $user)
    {
        return view('user.newPassword', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'gender' => 'required |in:'.implode(',', [User::GENDER_DIVERS, User::GENDER_FEMALE, User::GENDER_MALE]),
            'firstName' => 'required | string| max:255',
            'lastName' => 'required | string| max:255',
            'email' => 'required | string | email | max:255 | unique:users,email,' . $user->id,
        ]);

        if ($request->filled('password')){
            $newPassword = $request->validate([
                'password' => 'required | string | min:8 |confirmed',
            ]);

            $validatedData['password'] = Hash::make($newPassword['password']);

        }

        $user->update($validatedData);

        return redirect(route('profile-view'));

    }
}
