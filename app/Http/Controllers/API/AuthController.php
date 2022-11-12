<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;
use App\Http\Traits\MessageTrait;

class AuthController extends Controller
{
    use MessageTrait;
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' =>  ['required', 'string']
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return $this->fails(200, 'This email is not found');
        } else {
            if (!Hash::check($request->password, $user->password)) {
                return $this->fails(200, 'Wrong password');
            }
        }
        // if ($checkTokenIfExists = PersonalAccessToken::where('tokenable_id', $user->user_id)->first()) {
        //     $user->tokens()->where('tokenable_id', $user->user_id)->delete();
        // }
        $token = $user->createToken('LoginToken')->plainTextToken;
        return $this->success(200, 'Login Successfully', 'data', [
            'user' => $user,
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        if (auth()->user()->tokens()->delete())
            return $this->success_without_data(200, 'Logout Done');
    }
}
