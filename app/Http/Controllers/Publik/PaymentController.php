<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Midtrans\Notification;
use Midtrans\Config;
use Midtrans\Snap;
use App\Order;
use App\Cart;
use App\Payment;

class PaymentController extends Controller
{
    public function notification(Request $request){
        $payload = $request->getContent();
		$notification = json_decode($payload);
		
		// $validSignatureKey = hash("sha512", $notification->order_id . $notification->status_code . $notification->gross_amount . 'SB-Mid-server-yyJ_8KsPr_LTmhV3MjL8RHwa');
        
		// if ($notification->signature_key != $validSignatureKey) {
        //     return response(['message' => 'Invalid signature'], 403);
		// }
		
		// // $this->initPaymentGateway();
		// $status_code = $notification->status_code;
        
		// $paymentNotification = new Notification();
		// dd($paymentNotification);
		$order = Order::where('order_id', $notification->order_id)->firstOrFail();
		// dd($paymentNotification);

		// if ($order->isPaid()) {
		// 	return response(['message' => 'The order has been paid before'], 422);
		// }

		// $transaction = $paymentNotification->transaction_status;
		// $type = $paymentNotification->payment_type;
		// $orderId = $paymentNotification->order_id;
		// $fraud = $paymentNotification->fraud_status;
		$transaction = $notification->transaction_status;
        $type = $notification->payment_type;
        $order_id = $notification->order_id;
        $fraud = $notification->fraud_status;

		$vaNumber = null;
		$vendorName = null;
		if (!empty($paymentNotification->va_numbers[0])) {
			$vaNumber = $paymentNotification->va_numbers[0]->va_number;
			$vendorName = $paymentNotification->va_numbers[0]->bank;
		}

		$paymentStatus = $notification->transaction_status;
		if ($transaction == 'capture') {
			// For credit card transaction, we need to check whether transaction is challenge by FDS or not
			if ($type == 'credit_card') {
				if ($fraud == 'challenge') {
					// TODO set payment status in merchant's database to 'Challenge by FDS'
					// TODO merchant should decide whether this transaction is authorized or not in MAP
					$paymentStatus = Payment::CHALLENGE;
					$order->payment_status = "CONFIRMED";
					$order->save();
				} else {
					// TODO set payment status in merchant's database to 'Success'
					$paymentStatus = Payment::SUCCESS;
					$order->payment_status = "CONFIRMED";
					$order->save();
				}
			}
		} else if ($transaction == 'settlement') {
			// TODO set payment status in merchant's database to 'Settlement'
			$paymentStatus = Payment::SETTLEMENT;
			$order->payment_status = "CONFIRMED";
			$order->save();
		} else if ($transaction == 'pending') {
			// TODO set payment status in merchant's database to 'Pending'
			$paymentStatus = Payment::PENDING;
			$order->payment_status = "PENDING";
			$order->save();
		} else if ($transaction == 'deny') {
			// TODO set payment status in merchant's database to 'Denied'
			$paymentStatus = PAYMENT::DENY;
			$order->payment_status = "DENY";
			$order->save();
		} else if ($transaction == 'expire') {
			// TODO set payment status in merchant's database to 'expire'
			$paymentStatus = PAYMENT::EXPIRE;
			$order->payment_status = "EXPIRE";
			$order->save();
		} else if ($transaction == 'cancel') {
			// TODO set payment status in merchant's database to 'Denied'
			$paymentStatus = PAYMENT::CANCEL;
			$order->payment_status = "CANCEL";
			$order->save();
		}

		$paymentParams = [
			'order_id' => $order->order_id,
			// 'number' => $notification->va_number,
			'amount' => $notification->gross_amount,
			'method' => 'midtrans',
			'status' => $paymentStatus,
			'token' => $notification->transaction_id,
			'payloads' => $payload,
			'payment_type' => $notification->payment_type,
			'va_number' => $vaNumber,
			'vendor_name' => "Second Things",
			// 'biller_code' => $notification->biller_code,
			// 'bill_key' => $notification->bill_key
		];
		
		$payment = Payment::create($paymentParams);
		// if ($paymentStatus && $payment) {
		// 	function () use ($order, $payment) {
		// 		if (in_array($payment->status, [Payment::SUCCESS, Payment::SETTLEMENT])) {
		// 			$order->payment_status = Order::PAID;
		// 			// $order->status = Order::CONFIRMED;
		// 			$order->save();
		// 			Order::create($order);
		// 		}
		// 	};
		// }

		$message = 'Payment status is : '. $paymentStatus;

		$response = [
			'code' => 200,
			'message' => $message,
		];

		// return response($response, 200);
		return redirect('/transaction/show/', $order->order_id);
    }
    public function complete(Request $request){
        $code = $request->query('order_id');
		$order = Order::where('order_id', $code)->firstOrFail();
		// $cart = Cart::where('status', 'Belum Dibayar')->where('user_id', Auth::user()->id)->get();
		// foreach($cart as $c){
		// 	$c->status="Confirmed";
		// 	$c->save();
		// }
		
		if ($order->payment_status == Order::UNPAID) {
			return redirect('payments/failed?order_id='. $code);
		}

		\Session::flash('success', "Thank you for completing the payment process!");

		return redirect('transaction/'. $order->order_id);
    }
    public function failed(Request $request){
        //
    }
    public function unfinish(Request $request){
        //
    }
}
