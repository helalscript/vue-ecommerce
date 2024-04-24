<?php

namespace App\Http\Controllers;

use App\Models\Order_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderItemsController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_items = Order_item::orderBy('id', 'desc')->with('product', 'order')->get();
        return $this->sendResponse($order_items, 'Order_item list fetched successfully!');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
            'products_id' => 'required',
            'orders_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $order_items = Order_item::create($input);
        return $this->sendResponse($order_items, 'Order_item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order_items = Order_item::with('product', 'order')->find($id);
        return $this->sendResponse($order_items, 'Order_item list fetched successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order_items = Order_item::with('product', 'order')->find($id);
        return $this->sendResponse($order_items, 'Order_item list fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
            'products_id' => 'required',
            'orders_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $order_items = Order_item::find($id)->update($input);
        return $this->sendResponse($order_items, 'Order_item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order_items = Order_item::find($id)->delete();
        return $this->sendResponse($order_items, 'Order_item deleted successfully!');
    }
}
