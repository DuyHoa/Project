<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\monchuyennganh;

class MonChuyenNganhController extends Controller
{
    public function index()
    {
        return monchuyennganh::all();
    }

    public function show(monchuyennganh $monchuyennganh)
    {
        return $monchuyennganh;
    }

    public function store(Request $request)
    {
        $monchuyennganh = monchuyennganh::create($request->all());

        return response()->json($monchuyennganh, 201);
    }

    public function update(Request $request, monchuyennganh $monchuyennganh)
    {
        $monchuyennganh->update($request->all());

        return response()->json($monchuyennganh, 200);
    }

    public function delete(monchuyennganh $monchuyennganh)
    {
        $monchuyennganh->delete();

        return response()->json(null, 204);
    }
}
