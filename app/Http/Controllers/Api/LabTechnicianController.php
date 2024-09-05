<?php
// File: `app/Http/Controllers/Api/LabTechnicianController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\LabTechnicianResource;
use App\Models\LabTechnician;
use Illuminate\Http\Request;

class LabTechnicianController extends Controller
{
    public function index()
    {
        return LabTechnicianResource::collection(LabTechnician::all());
    }

    public function show(LabTechnician $labTechnician)
    {
        return new LabTechnicianResource($labTechnician);
    }

    public function store(Request $request)
    {
        $labTechnician = LabTechnician::create($request->all());
        return new LabTechnicianResource($labTechnician);
    }

    public function update(Request $request, LabTechnician $labTechnician)
    {
        $labTechnician->update($request->all());
        return new LabTechnicianResource($labTechnician);
    }

    public function destroy(LabTechnician $labTechnician)
    {
        $labTechnician->delete();
        return response()->json(null, 204);
    }
}
