<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishlistController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists=Wishlist::orderBy('id','desc')->with('user','product')->get();
        return $this->sendResponse($wishlists,'Wishlist list fetched successfully!');
    
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
            'product_id' => 'required',
            'user_id' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $wishlists=Wishlist::create($input);
        return $this->sendResponse($wishlists, 'Wishlist created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wishlists=Wishlist::with('user','product')->find($id);
        return $this->sendResponse($wishlists,'Wishlist fetched successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wishlists=Wishlist::with('user','product')->find($id);
        return $this->sendResponse($wishlists,'Wishlist fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'user_id' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $wishlists = Wishlist::find($id)->update($input);
        return $this->sendResponse($wishlists, 'Wishlist updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wishlists = Wishlist::find($id)->delete();
        return $this->sendResponse($wishlists,'Wishlist deleted successfully!');
    }
}

