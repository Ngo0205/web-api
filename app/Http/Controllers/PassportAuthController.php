<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PassportAuthController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Laravel10PassportAuth');
        return response()->json(['token' => $token], 200);
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $validation = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json(
                ['error' => $validation->errors()->all()],
                400
            );
        }

        if (auth()->attempt($data)) {
            $user = Auth::user();
            $token = $user->createToken('Myapp')->accessToken;
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 400);
        }

    }

    public function userInform()
    {
        $user = Auth::guard('api')->user();

        return response()->json([
            'data' => $user
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response(
            [
                'message' => "Logged out successfully"
            ]
        );
    }
}
