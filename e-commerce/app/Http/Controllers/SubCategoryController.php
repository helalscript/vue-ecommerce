<?php

namespace App\Http\Controllers;

use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SubCategoryController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categorys=Sub_category::orderBy('id','desc')->with('category')->get();
        return $this->sendResponse($sub_categorys,'Sub_category list fetched successfully!');
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
            'name' => 'required',
            'categories_id' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $sub_categorys=Sub_category::create($input);
        return $this->sendResponse($sub_categorys, 'Sub Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sub_categorys=Sub_category::with('category')->find($id);
        return $this->sendResponse($sub_categorys,'Sub_category list fetched successfully!');
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sub_categorys=Sub_category::with('category')->find($id);
        return $this->sendResponse($sub_categorys,'Sub Category fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'categories_id' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $sub_categorys = Sub_category::find($id)->update($input);
        return $this->sendResponse($sub_categorys, 'Sub Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub_categorys = Sub_category::find($id)->delete();
        return $this->sendResponse($sub_categorys,'Sub Category deleted successfully!');
    }
}

