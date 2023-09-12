<?php

namespace App\Traits;

trait HttpResponses {
    protected function success($person, $message = null, $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'person' => $person,
             'status_code' => $code
        ], $code);
    }

    protected function error($person, $message = null, $code)
{
    return response()->json([
        'status' => false,
        'message' => $message,
        'person' => $person,
        'status_code' => $code
    ], $code);
}

}











