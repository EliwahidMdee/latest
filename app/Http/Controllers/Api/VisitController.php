<?php
// File: `app/Http/Controllers/Api/VisitController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\VisitResource;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        return VisitResource::collection(Visit::all());
    }

    public function show(Visit $visit)
    {
        return new VisitResource($visit);
    }

    public function store(Request $request)
    {
        $visit = Visit::create($request->all());
        return new VisitResource($visit);
    }

    public function update(Request $request, Visit $visit)
    {
        $visit->update($request->all());
        return new VisitResource($visit);
    }

    public function destroy(Visit $visit)
    {
        $visit->delete();
        return response()->json(null, 204);
    }
}
