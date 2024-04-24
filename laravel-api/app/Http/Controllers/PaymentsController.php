<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentsController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->with('user','order')->get();
        return $this->sendResponse($payments, 'Payment list fetched successfully!');

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
            'date' => 'required',
            'method' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'users_id' => 'required',

        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $payments = Payment::create($input);
        return $this->sendResponse($payments, 'Payment created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments = Payment::orderBy('id', 'desc')->with('user','order')->find($id);
        return $this->sendResponse($payments, 'Payment list fetched successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments = Payment::find($id);
        return $this->sendResponse($payments, 'Payment fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'method' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'users_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $payments = Payment::find($id)->update($input);
        return $this->sendResponse($payments, 'Payment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payments = Payment::find($id)->delete();
        return $this->sendResponse($payments, 'Payment deleted successfully!');
    }
}

