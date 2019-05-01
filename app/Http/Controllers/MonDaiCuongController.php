<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mondaicuong;

class MonDaiCuongController extends Controller
{
    public function index()
    {
        return mondaicuong::all();
    }

    public function show(mondaicuong $mondaicuong)
    {
        return $mondaicuong;
    }

    public function store(Request $request)
    {
        $mondaicuong = mondaicuong::create($request->all());

        return response()->json($mondaicuong, 201);
    }

    public function update(Request $request, mondaicuong $mondaicuong)
    {
        $mondaicuong->update($request->all());

        return response()->json($mondaicuong, 200);
    }

    public function delete(mondaicuong $mondaicuong)
    {
        $mondaicuong->delete();

        return response()->json(null, 204);
    }
}
