<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyersController extends Controller
{
    public function Feeling(Request $request){

        $buyers = DB::table('buyers')->get();
        $type = 'buyers';
        return view('table', compact('buyers', 'type'));
    }
}
