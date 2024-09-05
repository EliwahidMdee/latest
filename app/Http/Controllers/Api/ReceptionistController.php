<?php
// File: `app/Http/Controllers/Api/ReceptionistController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\ReceptionistResource;
use App\Models\Receptionist;
use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function index()
    {
        return ReceptionistResource::collection(Receptionist::all());
    }

    public function show(Receptionist $receptionist)
    {
        return new ReceptionistResource($receptionist);
    }

    public function store(Request $request)
    {
        $receptionist = Receptionist::create($request->all());
        return new ReceptionistResource($receptionist);
    }

    public function update(Request $request, Receptionist $receptionist)
    {
        $receptionist->update($request->all());
        return new ReceptionistResource($receptionist);
    }

    public function destroy(Receptionist $receptionist)
    {
        $receptionist->delete();
        return response()->json(null, 204);
    }
}
