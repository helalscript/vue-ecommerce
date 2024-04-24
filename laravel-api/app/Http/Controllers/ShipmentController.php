<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShipmentController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipment = Shipment::orderBy('id', 'desc')->with('order')->get();
        return $this->sendResponse($shipment, 'Shipment list fetched successfully!');

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
            'delivery_date' => 'required',
            'recipient' => 'required',
            'address' => 'required',
            'status' => 'required',
            'orders_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $shipment = Shipment::create($input);
        return $this->sendResponse($shipment, 'Shipment created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shipment = Shipment::with('order')->find($id);
        return $this->sendResponse($shipment, 'Shipment list fetched successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shipment = Shipment::with('order')->find($id);
        return $this->sendResponse($shipment, 'Shipment list fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'delivery_date' => 'required',
            'recipient' => 'required',
            'address' => 'required',
            'status' => 'required',
            'orders_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $shipment = Shipment::find($id)->update($input);
        return $this->sendResponse($shipment, 'Shipment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shipment = Shipment::find($id)->delete();
        return $this->sendResponse($shipment, 'Shipment deleted successfully!');
    }
}

