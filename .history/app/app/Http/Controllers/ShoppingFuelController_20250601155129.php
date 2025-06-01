<?php

namespace App\Http\Controllers;

use App\Models\shoppingFuel;
use Illuminate\Http\Request;

class ShoppingFuelController extends Controller
{
    public function index()
    {
        return response()->json(ShoppingFuel::all());
    }

    public function show($id)
    {
        return response()->json(ShoppingFuel::findOrFail($id));
    }

     public function update(Request $request, $id)
    {
        $fuel = ShoppingFuel::findOrFail($id);
        $fuel->update($request->all());
        return response()->json($fuel);
    }

    public function destroy($id)
    {
        ShoppingFuel::destroy($id);
        return response()->json(null, 204);
    }
}

