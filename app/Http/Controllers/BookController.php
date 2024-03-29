<?php

use App\Http\Resources\V1\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookResource::collection(Book::latest()->paginate());
    }

    /**
     * Display a listing of the resource.
     * 
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from strorage.
     * 
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
    */
    public function destroy(Book $book)
    {
        if( $book->delete() ) {
            return response()->json([
                'message' => 'Success'
            ],204);
        }
            return response()->json([
                'message' => 'Not found'
            ],404);
    }
}
