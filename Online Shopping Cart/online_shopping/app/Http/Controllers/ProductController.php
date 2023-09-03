<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return response()->json([
            'success'=> true,
            'message'=> 'All products',
            'data'=> $product
            ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
        'name'=> 'required',
        'description'=> 'required',
        'price'=> 'required',
        'catigory'=> 'required',
        'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        if( $validator->fails()){
            return response()->json([
                'fail'=> false,
                'message'=> 'Sorry not stored',
                'error'=> $validator->errors()
                ]);
        }
        //method to save image :
if($image = $request->file('image'))
{
$distinationPath = 'images/';
$profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
$image->move($distinationPath,$profileImage);
$input['image']="$profileImage";
}

        $product = Product::create($input);

        return response()->json([
            'success'=> true,
            'message'=> 'product created successfully',
            'data'=> $product
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        if( is_null($product)){
            return response()->json([
                'fail'=> false,
                'message'=> 'Sorry not found!' 
                ]);
        }

        return response()->json([
            'success'=> true,
            'message'=> 'product fetched successfully',
            'data'=> $product
            ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',

        ]);

        if( $validator->fails()){
            return response()->json([
                'fail'=> false,
                'message'=> 'Sorry not stored',
                'error'=> $validator->errors()
                ]);
        }

//method to save image :
if($image = $request->file('image'))
{
$distinationPath = 'images/';
$profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
$image->move($distinationPath,$profileImage);
$input['image']="$profileImage";
}
else//if he dont want to put image
{
    unset($input['image']);
}

        $product->name = $input['name'];
        $product->description = $input['description'];
        $product->price = $input['price'];
        $product->catigory = $input['catigory'];
        $product->image = $input['image'];
        $product->save();

        return response()->json([
            'success'=> true,
            'message'=> 'product updated successfully',
            'data'=> $product
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([ 
            'success'=> true,
            'message'=> 'product deleted successfully',
            'data'=> $product
            ]);
    }
}
