<?php

use App\Http\Resources\V1\RegisterResource;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegisterResource::collection(Register::latest()->paginate());
    }

    /**
     * Display a listing of the resource.
     * 
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        return new RegisterResource($register);
    }

    /**
     * Remove the specified resource from strorage.
     * 
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
    */
    public function destroy(Register $register)
    {
        if( $register->delete() ) {
            return response()->json([
                'message' => 'Success'
            ],204);
        }
            return response()->json([
                'message' => 'Not found'
            ],404);
    }
}
