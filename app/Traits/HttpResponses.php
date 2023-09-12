<?php

namespace App\Traits;

trait HttpResponses {
    protected function success($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'status_code' => $code
        ], $code);
    }

    protected function error($data, $message = null, $code)
{
    return response()->json([
        'status' => false,
        'message' => $message,
        'status_code' => $code
    ], $code);
}

}











