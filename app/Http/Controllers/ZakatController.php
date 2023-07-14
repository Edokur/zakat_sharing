<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZakatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function v_zakat()
    {

        $response = Http::get("https://logam-mulia-api.vercel.app/prices/hargaemas-org");

        $data = json_decode($response->body());
        $emas = $data->data[0]->buy;
        return view('zakat', compact('emas'), [
            'title' => 'Zakat'
        ]);
    }
}
