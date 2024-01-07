<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\GetStoreRequest;
use Illuminate\Http\Response;
use App\Services\StoreService;
use Exception;

class StoreController extends BaseController
{
    private StoreService $storeService;
    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }
    public function fetch(GetStoreRequest $request)
    {
        try {
            $data = $this->storeService->fetch($request->id);
            return $this->successResponse($data);
            } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }
}
