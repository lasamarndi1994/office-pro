<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function successResponse($message)
    {
        Session::flash('response', [
            "status" => true,
            "message" => $message . '.' ?? "Successfully created.",
        ]);
    }

    public function errorResponse()
    {
        Session::flash('response', [
            "status" => false,
            "message" => $message ?? "Something went wrong.",
        ]);
    }
}
