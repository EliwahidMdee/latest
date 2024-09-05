<?php

namespace App\Http\Controllers\Non;


use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Receptionist;
use Illuminate\Http\Request;


class ReceptionistController extends Controller
{
    public function index()
    {
        $receptionists = Receptionist::all();
        return view('receptionists.index', compact('receptionists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:receptionists',
            'phone_number' => 'required|string|max:15',
            'hired_date' => 'required|date',
        ]);

        Receptionist::create($request->all());

        return redirect()->route('receptionists.create')->with('success', 'Receptionist created successfully.');
    }

    public function showAssignForm()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('receptionists.assign', compact('patients', 'doctors'));
    }

    public function assignPatient(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        $patient = Patient::find($request->patient_id);
        $patient->doctor_id = $request->doctor_id;
        $patient->save();

        return redirect()->route('receptionists.assign')->with('success', 'Patient assigned to doctor successfully.');
    }
}
