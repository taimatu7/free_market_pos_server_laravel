<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    private const SUCCESS = '1';
    private const FAILURE = '0';

    protected function successResponse($data, $code=200)
    {
        return response()->json([
            'status' => self::SUCCESS,
            'data' => $data
        ], $code);
    }

    // TODO エラーごとのレスポンスを返すメソッドを作成する
    protected function errorResponse($message, $code)
    {
        return response()->json([
            'status' => self::FAILURE,
            'message' => $message,
            'code' => $code
        ], $code);
    }
}
