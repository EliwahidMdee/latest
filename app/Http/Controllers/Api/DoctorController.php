<?php
// File: `app/Http/Controllers/Api/DoctorController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return DoctorResource::collection(Doctor::all());
    }

    public function show(Doctor $doctor)
    {
        return new DoctorResource($doctor);
    }

    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all());
        return new DoctorResource($doctor);
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        return new DoctorResource($doctor);
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return response()->json(null, 204);
    }
}
