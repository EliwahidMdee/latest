<?php
// File: `app/Http/Controllers/Api/ServiceController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return ServiceResource::collection(Service::all());
    }

    public function show(Service $service)
    {
        return new ServiceResource($service);
    }

    public function store(Request $request)
    {
        $service = Service::create($request->all());
        return new ServiceResource($service);
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return new ServiceResource($service);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(null, 204);
    }
}
