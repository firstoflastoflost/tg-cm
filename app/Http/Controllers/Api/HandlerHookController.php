<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HandlerHookController extends Controller
{
    public function handle()
    {
        Log::info("weeeebhook: ", ['response' => \request()->all()]);
    }
}
