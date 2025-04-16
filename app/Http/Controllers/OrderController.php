<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        return view('orders.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_amount' => 'required|numeric',
            'status' => 'required|string|in:pending,processing,shipped,delivered',
            'delivery_address' => 'required|string',
            'tracking_number' => 'nullable|string',
        ]);

        $order = Order::create($request->all());

        // Tambahkan logika untuk menambahkan item order dan pembayaran

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    // Tambahkan method edit, update, dan destroy sesuai kebutuhan
}
