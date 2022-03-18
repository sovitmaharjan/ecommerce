<?php


namespace App\Custom;

class ResponseService
{
    public function responseError($msg, $code = '')
    {
        return response([
            'status' => 'error',
            'code' => $code,
            'message' => $msg
        ], $code != '' ? $code : 400);
    }

    public function responseSuccess($data = [], $msg = '', $code = '')
    {
        return response([
            'status' => 'success',
            'message' => $msg,
            'data' => $data,
        ], $code != '' ? $code : 200);
    }

    public function responseSuccessMsg($msg = "", $code = "")
    {
        return response([
            'status' => 'success',
            'message' => $msg,
        ], $code != '' ? $code : 200);
    }
}
