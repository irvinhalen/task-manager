<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function success($params = [], $status = 200){
        return Response::json(
            array_merge(
                ['status' => 'success'],
                $params
            ),
            $status
        );
    }

    public function error(string $message = '', int $status = 400)
    {
        return Response::json([
            'status' => 'error',
            'message' => $message,
        ], $status);
    }
}
