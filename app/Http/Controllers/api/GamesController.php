<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function titlesOne(): JsonResponse
    {
        $titles = Game::query()->select('name')->whereBetween('id',[0,100])->get();
        return response()->json([
            "titles" => $titles
        ]);
    }
    public function titlesTwo(): JsonResponse
    {
        $titles = Game::query()->select('name')->whereBetween('id',[101,201])->get();
        return response()->json([
            "titles" => $titles
        ]);
    }
    public function titlesThree(): JsonResponse
    {
        $titles = Game::query()->select('name')->whereBetween('id',[202,302])->get();
        return response()->json([
            "titles" => $titles
        ]);
    }

}


