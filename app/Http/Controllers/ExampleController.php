<?php

namespace App\Http\Controllers;



class ExampleController extends Controller
{
    public function hello()
    {
        if (app()->environment('local', 'staging')) {
            return response()->json(['name' => 'Abigail', 'state' => 'CA']);
        }
        return env('APP_TIMEZONE');
    }
}
