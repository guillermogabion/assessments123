<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{


    public function check_available(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();

        if ($request->quantity <= $product->stock) {
            return $this->make_order($product, $request);
        } else {
            return 'Failed to order this product due to unavailability of the stock';
        }
    }

    public function make_order($product, $request)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->product_id = $product->id;
        $order->quantity = $request->quantity;

        $order->save();

        return $this->deduct($order);
    }

    public function deduct($order)
    {
        $deduct = Product::where('id', $order->product_id)->first();

        $deduct->stock = $deduct['stock'] - $order['quantity'];
        $deduct->save();

        return response()->json([
            'message' => 'You have successfully ordered this product',
            'product' => $deduct
        ], 201);
    }
}
