<?php

namespace App\Http\Service;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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

            if(!empty($data['remember'])) {
                $this->makeAuthCookie($email, $password);
            }

            Auth::login($user);

        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function login($data): bool
    {
        $email = $data['email'];
        $password = $data['password'];
        if(!empty($data['remember'])) {
            $this->makeAuthCookie($email, $password);
        }
        $result = Auth::attempt(['email' => $email, 'password' => $password]);

        return $result;
    }

    public function logout() : void
    {
        Auth::logout();
    }

    public function makeAuthCookie($email, $password) : void {

        if(!empty($email) && !empty($password)) {
            Cookie::queue(Cookie::forever('email', $email));
            Cookie::queue(Cookie::forever('password', $password));
        }

    }

}
