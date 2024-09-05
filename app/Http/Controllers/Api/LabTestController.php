<?php
// File: `app/Http/Controllers/Api/LabTestController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\LabTestResource;
use App\Models\LabTest;
use Illuminate\Http\Request;

class LabTestController extends Controller
{
    public function index()
    {
        return LabTestResource::collection(LabTest::all());
    }

    public function show(LabTest $LabTest)
    {
        return new LabTestResource($LabTest);
    }

    public function store(Request $request)
    {
        $LabTest = LabTest::create($request->all());
        return new LabTestResource($LabTest);
    }

    public function update(Request $request, LabTest $LabTest)
    {
        $LabTest->update($request->all());
        return new LabTestResource($LabTest);
    }

    public function destroy(LabTest $LabTest)
    {
        $LabTest->delete();
        return response()->json(null, 204);
    }
}
