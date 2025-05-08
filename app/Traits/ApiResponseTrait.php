<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public function sendResponse($data = null, $message = '', $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    public function sendError($message = 'Something went wrong', $errors = [], $code = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }
}
