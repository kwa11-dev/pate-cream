<?php

namespace App\Http\Controllers\Api;

use App\Services\AdminUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    protected $adminUserService;

    public function __construct(AdminUserService $adminUserService)
    {
        $this->adminUserService = $adminUserService;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $admin = $this->adminUserService->findByEmail($request->email);

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Simple token auth (for frontend SPA use)
        $token = base64_encode(Str::random(40));
        $admin->api_token = $token;
        $admin->save();

        return response()->json(['token' => $token, 'admin' => $admin]);
    }

    public function logout(Request $request)
    {
        $admin = $request->user();
        if ($admin) {
            $admin->api_token = null;
            $admin->save();
        }
        return response()->json(['message' => 'Logged out']);
    }
}
