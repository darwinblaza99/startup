<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function create(Request $request)
    {

        // return ["name"=>"darwin"];
        $type = new type();

        $type->name = $request->input('name');

        $type->save();
        return response()->json($type);
    }
}
