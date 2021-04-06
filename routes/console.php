<?php

use Firebase\JWT\JWT;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {

    $input = [
        "username" => "sanglt",
        "pw" => "123456"
    ];

    $isValidAuthenticationInfo = function ($input) {
        return $input["username"] === 'sanglt';
    };

    if ($isValidAuthenticationInfo($input)) {
        dd(JWT::encode(['user_id' => 1], 'ssss'));
    } else {
        dd("401");
    }
})->describe('Display an inspiring quote');


Artisan::command('users', function () {
    $validToken = JWT::decode("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxfQ.mxmGY0lQ6_yV9S0wxXszZSXxd4sEfyS8vJSXSTB5mN8", 'ssss', ['ES256', 'HS256', 'HS384', 'HS512', 'RS256', 'RS384', 'RS512']);

    if ($validToken) {
        dd([
            [
                "user_id" => 1
            ],
            [
                "user_id" => 2
            ]
        ]);
    } else {
        dd(403);
    }
})->describe('Display an inspiring quote');
