<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validation = $this->validate($request, [
            'name' => 'required',
            'telephone' => 'required|unique:users|max:11',
            'password' => 'required|min:8|max:20',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->telephone = $request->telephone;
        $user->password = bcrypt($request->password);
        $user->save();         

        return response()->json($user->toArray()); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
