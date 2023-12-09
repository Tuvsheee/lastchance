<?php
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        // Handle payment processing logic here
        // Store payment details in the database, update order status, etc.

        // Example: Save payment details to the database
        $payment = new Payment();
        $payment->amount = $request->input('amount');
        $payment->save();

        return redirect('/payment')->with('success', 'Payment successful!');
    }
}
