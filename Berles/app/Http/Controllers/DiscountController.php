<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return response()->json($discounts);
    }

    public function show($id)
    {
        $discount = Discount::find($id);
        if (!$discount) {
            return response()->json(['message' => 'Discount not found'], 404);
        }
        return response()->json($discount);
    }

    public function store(Request $request)
    {
        $discount = Discount::create($request->all());
        return response()->json($discount, 201);
    }

    public function update(Request $request, $id)
    {
        $discount = Discount::find($id);
        if (!$discount) {
            return response()->json(['message' => 'Discount not found'], 404);
        }
        $discount->update($request->all());
        return response()->json($discount);
    }

    public function destroy($id)
    {
        $discount = Discount::find($id);
        if (!$discount) {
            return response()->json(['message' => 'Discount not found'], 404);
        }
        $discount->delete();
        return response()->json(['message' => 'Discount deleted']);
    }
}