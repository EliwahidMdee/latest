<?php
// File: `app/Http/Controllers/Api/AppointmentController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return AppointmentResource::collection(Appointment::all());
    }

    public function show(Appointment $appointment)
    {
        return new AppointmentResource($appointment);
    }

    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());
        return new AppointmentResource($appointment);
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());
        return new AppointmentResource($appointment);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return response()->json(null, 204);
    }
}
