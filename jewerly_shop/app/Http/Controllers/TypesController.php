<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function Feeling (Request $request){

        $types = DB::table('types')->get();
        $type = 'types';
        return view('Types', compact('types', 'type'));
    }
}
