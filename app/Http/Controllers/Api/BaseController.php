<?php

namespace App\Http\Controllers\Api;

use App\Constants\Constants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class BaseController extends Controller
{
    protected function successResponse($data, $code=Response::HTTP_OK)
    {
        return response()->json([
            'status' => Constants::API_STATUS_SUCCESS,
            'data' => $data
        ], $code);
    }

    // TODO エラーごとのレスポンスを返すメソッドを作成する
    protected function errorResponse($message, $code)
    {
        return response()->json([
            'status' => Constants::API_STATUS_FAILURE,
            'message' => $message,
            'code' => $code
        ], $code);
    }
}
