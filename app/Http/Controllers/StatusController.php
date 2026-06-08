<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function store(Request $request)
    {
        $status = Status::create([
            'nome' => $request->nome
        ]);

        return response()->json($status, 201);
    }
}