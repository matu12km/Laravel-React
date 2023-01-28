<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return response()->json(
            ["post" => [
                [
                    "id" => 1,
                    "title" => "test1",
                    "text" => "testText1"
                ],
                [
                    "id" => 2,
                    "title" => "test2",
                    "text" => "testText3"
                ],
            ]],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
