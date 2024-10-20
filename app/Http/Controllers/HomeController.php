<?php

namespace App\Http\Controllers;

use App\Models\pinjaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $pinjamen['pinjamen'] = pinjaman::getAllpinjamen()->get();
        $pinjamen['id'] = 1;
        // dd($pinjamen);
        return view('home', $pinjamen);

    }
}
