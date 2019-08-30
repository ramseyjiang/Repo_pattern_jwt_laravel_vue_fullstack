<?php

namespace Rspa\Http\Controllers\Api;

use Illuminate\Http\Response;
use Rspa\Http\Controllers\Controller;
use Rspa\Http\Requests\UserLoginRequest;
use Rspa\Http\Requests\UserRegisterRequest;
use Rspa\Contracts\Repositories\UserRepositoryContract;
use Rspa\Contracts\Services\UserServiceContract;

class UserController extends Controller
{
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryContract $user)
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->user = $user;
    }
    /**
     * Rewrite login function in AuthenticatesUsers class for username or password login.
     *
     * @param UserLoginRequest $request
     * @param UserServiceContract $userService
     * @return void
     */
    public function login(UserLoginRequest $request, UserServiceContract $userService)
    {
        $userService->checkLogin($request->username, $request->password);
        $user = $request->user();

        if (!empty($user) && ($token = \JWTAuth::fromUser($user))) {
            return $this->respondWithToken($token);
        } else {
            return response()->json([
                'errors' => trans('auth.failed')
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
    /**
     * Register using api
     *
     * @param UserRegisterRequest $request
     * @return void
     */
    public function register(UserRegisterRequest $request)
    {
        $user = $this->user->createUser($request->all());
        $token = auth('api')->login($user);

        return $this->respondWithToken($token);
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
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user()
    {
        return response()->json(auth()->user());
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
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
