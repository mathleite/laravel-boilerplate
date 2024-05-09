<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HealthCheckController extends Controller
{
    public function ping(): JsonResponse
    {
        return response()->json(['pong' => true]);
    }
}
