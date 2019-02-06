<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChargeController extends Controller
{
    public function Direction($origin,$destination)
    {
        $response = \GoogleMaps::load('directions')
        ->setParam([
            'origin'          => $origin,
            'destination'     => $destination,
            "language"        => "pt-BR",
        ])->get();

        return json_decode($response);  // true

    }
}
