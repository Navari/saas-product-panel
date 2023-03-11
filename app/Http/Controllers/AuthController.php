<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function __construct(
        private readonly AuthService $authService
    ){}

    public function login(): View
    {
        return view('login');
    }

    public function auth(AuthRequest $authRequest)
    {
        $status = $this->authService->auth($authRequest->validated());

        if ($status) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->route('login')->withErrors(['message' => 'Invalid credentials']);
        }
    }
}
