<?php
// File: `app/Http/Controllers/Api/PaymentController.php`

namespace App\Http\Controllers\Api;

use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return PaymentResource::collection(Payment::all());
    }

    public function show(Payment $payment)
    {
        return new PaymentResource($payment);
    }

    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return new PaymentResource($payment);
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return new PaymentResource($payment);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response()->json(null, 204);
    }
}
