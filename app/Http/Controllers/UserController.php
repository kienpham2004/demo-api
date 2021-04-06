<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function checkUserPassword(Request $request){
        $username = $request->username;
        $password =  $request->password;
        $checkUsername = DB::table('users')->where('name', $username)->exists();
        $checkPassword = DB::table('users')->where('password', $password)->exists();

        if ($checkPassword === true && $checkPassword === true) {
            return true;
        } else {
            return  false;
        }
    }

    public function login(Request $request){
        if ($this->checkUserPassword($request)) {
            $username = $request->username;
            $id = DB::table('users')->select('id')->where('name', $username)->get();
            $key = JWT::encode(['id' => $id->first()->id], '123456');

            return true;
        } else {
            return false;
        }
    }

    public function listUser($request){
        if (login($request)) {
            $list = DB::table('users')->select(['*'])->get();

            return response()->json($list);
        } else {
            abort(404);
        }

    }
}
