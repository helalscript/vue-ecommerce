<?php

namespace App\Http\Controllers;

use App\Models\Cupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CuponsController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cupons = Cupon::orderBy('id', 'desc')->with('cupon_usege')->get();
        return $this->sendResponse($cupons, 'Cupon list fetched successfully!');

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
            'code' => 'required',
            'percentage' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'max_uses' => 'required',
            'use_count' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $cupons = Cupon::create($input);
        return $this->sendResponse($cupons, 'Cupon created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cupons = Cupon::with('cupon_usege')->find($id);
        return $this->sendResponse($cupons, 'Cupon list fetched successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cupons = Cupon::find($id);
        return $this->sendResponse($cupons, 'Cupon fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'percentage' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'max_uses' => 'required',
            'use_count' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $cupons = Cupon::find($id)->update($input);
        return $this->sendResponse($cupons, 'Cupon updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cupons = Cupon::find($id)->delete();
        return $this->sendResponse($cupons, 'Cupon deleted successfully!');
    }
}
