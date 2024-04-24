<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CartsController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts=Cart::orderBy('id','desc')->with('product','user')->get();
        return $this->sendResponse($carts,'Cart list fetched successfully!');
    
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
            'name' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $carts=Cart::create($input);
        return $this->sendResponse($carts, 'Cart created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carts=Cart::with('product','user')->find($id);
        return $this->sendResponse($carts,'Cart fetched successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carts=Cart::find($id);
        return $this->sendResponse($carts,'Cart fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $carts = Cart::find($id)->update($input);
        return $this->sendResponse($carts, 'Cart updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carts = Cart::find($id)->delete();
        return $this->sendResponse($carts,'Cart deleted successfully!');
    }
}
