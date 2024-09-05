<?php
// File: `app/Http/Controllers/Api/PatientController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return PatientResource::collection(Patient::all());
    }

    public function show(Patient $patient)
    {
        return new PatientResource($patient);
    }

    public function store(Request $request)
    {
        $patient = Patient::create($request->all());
        return new PatientResource($patient);
    }

    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());
        return new PatientResource($patient);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json(null, 204);
    }
}
