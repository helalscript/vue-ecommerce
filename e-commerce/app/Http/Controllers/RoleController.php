<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::orderBy('id','desc')->with('user')->get();
        return $this->sendResponse($roles,'Role list fetched successfully!');
    
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
        $roles=Role::create($input);
        return $this->sendResponse($roles, 'Role created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $roles=Role::with('user')->find($id);
        return $this->sendResponse($roles,'Role fetched successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles=Role::find($id);
        return $this->sendResponse($roles,'Role fetched successfully!');
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
        $roles = Role::find($id)->update($input);
        return $this->sendResponse($roles, 'Role updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roles = Role::find($id)->delete();
        return $this->sendResponse($roles,'Role deleted successfully!');
    }
}
