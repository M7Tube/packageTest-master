<?php

namespace App\Http\Traits;

trait MessageTrait
{
    public function success($code, $message, $DataName, $data)
    {
        return response()->json([
            'status' => 'success',
            'code' => $code,
            'message' => $message,
            $DataName => $data
        ], $code);
    }

    public function success_without_data($code, $message)
    {
        return response()->json([
            'status' => 'success',
            'code' => $code,
            'message' => $message,
        ], $code);
    }

    public function fails($code, $message)
    {
        return response()->json([
            'status' => 'fails',
            'code' => $code,
            'message' => $message,
        ], $code);
    }
}
