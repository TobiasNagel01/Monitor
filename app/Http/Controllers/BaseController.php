<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function ajaxRedirect(string $route)
    {
        return response()->json([
            'redirect' => route($route),
        ]);
    }
}
