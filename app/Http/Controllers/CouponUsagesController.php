<?php

namespace App\Http\Controllers;

use App\Models\Coupon_usage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponUsagesController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon_usages = Coupon_usage::orderBy('id', 'desc')->with('user', 'cupon')->get();
        return $this->sendResponse($coupon_usages, 'Coupon_usage list fetched successfully!');

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
            'usage_count' => 'required',
            'user_id' => 'required',
            'cupons_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $coupon_usages = Coupon_usage::create($input);
        return $this->sendResponse($coupon_usages, 'Coupon_usage created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coupon_usages = Coupon_usage::with('user', 'cupon')->find($id);
        return $this->sendResponse($coupon_usages, 'Coupon_usage list fetched successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon_usages = Coupon_usage::find($id);
        return $this->sendResponse($coupon_usages, 'Coupon_usage fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'usage_count' => 'required',
            'user_id' => 'required',
            'cupons_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $coupon_usages = Coupon_usage::find($id)->update($input);
        return $this->sendResponse($coupon_usages, 'Coupon_usage updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon_usages = Coupon_usage::find($id)->delete();
        return $this->sendResponse($coupon_usages, 'Coupon_usage deleted successfully!');
    }
}
