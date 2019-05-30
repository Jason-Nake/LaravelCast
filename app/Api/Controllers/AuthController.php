<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/28
 * Time: 2:16 PM
 */

namespace App\Api\Controllers;


use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function authenticate(Request $request)
    {
        $payload = [
            'user_email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        try {
            if (!$token = JWTAuth::attempt($payload)) {
                return response()->json(['error' => 'token_not_provided'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => '不能创建token'], 500);
        }
        return response()->json(compact('token'));

    }
}
