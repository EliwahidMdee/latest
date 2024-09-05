<?php
// File: `app/Http/Controllers/Api/PharmacistController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\PharmacistResource;
use App\Models\Pharmacist;
use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    public function index()
    {
        return PharmacistResource::collection(Pharmacist::all());
    }

    public function show(Pharmacist $pharmacist)
    {
        return new PharmacistResource($pharmacist);
    }

    public function store(Request $request)
    {
        $pharmacist = Pharmacist::create($request->all());
        return new PharmacistResource($pharmacist);
    }

    public function update(Request $request, Pharmacist $pharmacist)
    {
        $pharmacist->update($request->all());
        return new PharmacistResource($pharmacist);
    }

    public function destroy(Pharmacist $pharmacist)
    {
        $pharmacist->delete();
        return response()->json(null, 204);
    }
}
