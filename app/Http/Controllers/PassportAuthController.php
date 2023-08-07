<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PassportAuthController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request,[
           'name'=> 'required|min:4',
            'email'=> 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
           'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Laravel10PassportAuth');
        return response()->json(['token' => $token],200);
    }

    public function login (Request $request): array
    {
//        $data = [
//            'email' => $request->email,
//            'password' => $request->password
//        ];
//
//        if (auth()->attempt($data)){
//            $token = auth()->user()->createToken('Laravel10PassportToken')->accessToken;
//            return response()->json(['token' => $token],200);
//        }
//        else{
//            return response()->json(['error' => 'Unauthorised'],400);
//        }

        dd($request->all());
    }

    public function userInfor(){
        $user = auth()->user();
        return response()->json([
            'user' => $user
        ],200);
    }
}
