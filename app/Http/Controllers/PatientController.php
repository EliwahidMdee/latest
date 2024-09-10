<?php
namespace App\Http\Controllers;


use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients', compact('patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'date_of_birth' => 'required|string|max:100',
            'gender' => 'required',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|max:100',
            'email' => 'required|email|max:50',
        ]);
        Patient::create($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient added successfully.');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        $doctor = $patient->doctor;

        return view('patients.show', compact('patient', 'doctor'));
    }
}
