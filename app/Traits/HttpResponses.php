<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($data = null, $message = null, $code = 200)
    {
        $responseMessage = $message === null ? 'Response Was Successful' : $message;

        return response()->json([
            'status' => $code,
            'message' => $responseMessage,
            'data' => $data
        ], $code);
    }

    protected function error($data = null, $message = null, $code)
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}