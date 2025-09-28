<?php

namespace App\Http\Service;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{

    public function register($data) : void
    {
        $email = $data['email'];
        $password = $data['password'];
        $name = $data['name'];

        try {
            $user = User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'name' => $name,
            ]);

            Auth::login($user);

        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function login($data): bool
    {
        $email = $data['email'];
        $password = $data['password'];

        $result = Auth::attempt(['email' => $email, 'password' => $password]);

        return $result;
    }

    public function logout() : void
    {
        Auth::logout();
    }

}
