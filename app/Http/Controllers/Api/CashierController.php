<?php
// File: `app/Http/Controllers/Api/CashierController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\CashierResource;
use App\Models\Cashier;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {
        return CashierResource::collection(Cashier::all());
    }

    public function show(Cashier $cashier)
    {
        return new CashierResource($cashier);
    }

    public function store(Request $request)
    {
        $cashier = Cashier::create($request->all());
        return new CashierResource($cashier);
    }

    public function update(Request $request, Cashier $cashier)
    {
        $cashier->update($request->all());
        return new CashierResource($cashier);
    }

    public function destroy(Cashier $cashier)
    {
        $cashier->delete();
        return response()->json(null, 204);
    }
}
