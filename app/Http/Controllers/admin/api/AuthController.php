<?php

namespace App\Http\Controllers\admin\api;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        auth()->setDefaultDriver('api');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user(),200);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    public function changePassWord(Request $request) {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
        ]
        ,[
            'required' =>'Hãy nhập mật khẩu mới',
            'min' => 'Mật khẩu mới phải ít nhất 6 ký tự'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->update(
            ['password' => Hash::make($request->password)]
        );

        return response()->json([
            'message' => 'User successfully changed password',
            'user' => $user,
        ], 201);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
                'username' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]
            ,[
                'required' => 'Không được để trống!',
                'email'    => 'Định dạng email không đúng.',
                'min'     => 'Nhập ít nhất 6 ký tự',
                'unique' => 'Email đã tồn tại'
            ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role_id' => '1',
            'status' => '1',
            'password' => Hash::make($request->password),
        ]);


        return response()->json([
            'message' => 'User register successfully ',
        ], 201);
    }

    public function destroy(Request $request) {
        $validator = Validator::make($request->all(), [
                'id' => 'required',
            ]
            ,[
                'required' => 'Không được để trống!',
            ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::findOrFail($request->id);

        $user->delete();
        return response()->json([
            'messege' => 'Succsess delete user',
        ], 200);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
