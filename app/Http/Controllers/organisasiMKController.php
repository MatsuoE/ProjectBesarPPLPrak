<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\susunanMK;

class organisasiMKController extends Controller
{
    public function index()
    {
        return view('organisasiMKView', [
            'MK' => susunanMK::all()
        ]);
    }
}
