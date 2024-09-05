<?php
namespace App\Http\Controllers\Non;


use App\Models\Cashier;
use Illuminate\Http\Request;

use App\Models\Patient;

class CashierController extends Controller
{
    public function index()
    {
        $cashiers = Cashier::all();
        return view('cashiers.index', compact('cashiers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Cashier::create($request->all());

        return redirect()->route('cashiers.index')->with('success', 'Cashier added successfully.');
    }
    public function generateBill(Request $request, Patient $patient)
    {
        // Generate bill logic
        // ...
        return redirect()->route('patients.show', $patient)->with('success', 'Bill generated successfully.');
    }
}
