<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends BaseController {
    /**
     * @param RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register_post(RegisterRequest $request)
    {
        $data = $request->validated();
        $this->authService->register($data);
        return redirect()->route('index');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login_post(LoginRequest $request)
    {
        $data = $request->validated();
        $result = $this->authService->login($data);
        if($result) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with("error_login", "Not valid login or password");
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('index');
    }

}
