<?php
// File: `app/Http/Controllers/Api/PrescriptionController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\PrescriptionResource;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        return PrescriptionResource::collection(Prescription::all());
    }

    public function show(Prescription $prescription)
    {
        return new PrescriptionResource($prescription);
    }

    public function store(Request $request)
    {
        $prescription = Prescription::create($request->all());
        return new PrescriptionResource($prescription);
    }

    public function update(Request $request, Prescription $prescription)
    {
        $prescription->update($request->all());
        return new PrescriptionResource($prescription);
    }

    public function destroy(Prescription $prescription)
    {
        $prescription->delete();
        return response()->json(null, 204);
    }
}
