<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chuyennganh;

class ThuocChuyenNganhController extends Controller
{
    public function index()
    {
        return chuyennganh::all();
    }

    public function show(chuyennganh $chuyennganh)
    {
        return $chuyennganh;
    }

    public function store(Request $request)
    {
        $chuyennganh = chuyennganh::create($request->all());

        return response()->json($chuyennganh, 201);
    }

    public function update(Request $request, chuyennganh $chuyennganh)
    {
        $chuyennganh->update($request->all());

        return response()->json($chuyennganh, 200);
    }

    public function delete(chuyennganh $chuyennganh)
    {
        $chuyennganh->delete();

        return response()->json(null, 204);
    }
}
