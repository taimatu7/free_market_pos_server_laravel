<?php

namespace App\Services;

use App\Models\Store;
use Exception;

class StoreService
{
    public function fetch(int $id): Store
    {
        try {
            $store = Store::find($id);
            if (!$store) {
                throw new Exception('店舗が見つかりませんでした。');
            }
            return $store;
        } catch (Exception $e) {
            throw $e;
        } 
    }
}