<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function __construct(
        private readonly UserRepository $userRepository,
    ){}

    public function auth(array $credentials): bool
    {
        return Auth::attempt($credentials);
    }
}
