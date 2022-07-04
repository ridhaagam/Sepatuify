<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::getProduct()->paginate(5);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'name' => 'required|max:255',
            'url' => 'required|file|mimes:png,jpg',
            'description' => 'required',
            'price' => 'required|integer',
            'slug'=> 'required',
        ]);

        try{
            $fileName = time().$request->file('url')->getClientOriginalName();
            $path = $request->file('url')->storeAs('public/gallery', $fileName);
            $validasi['url']=$path;
            $response = Product::create($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]);
            
        } catch(\Exception $e){
            return response()->json([
                'message'=>'Error',
                'errors'=>$e->getMessage()
                ]);
        }

        function ProductGalleries(){
            $data=ProductGalleries::all();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Product::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $validasi=$request->validate([
            'name' => 'required|max:255',
            'url' => '',
            'description' => 'required',
            'price' => 'required|integer',
            'slug'=> '',
        ]);

        try{
            if($request->file('foto')){
            $fileName = time().$request->file('url')->getClientOriginalName();
            $path = $request->file('url')->storeAs('public/gallery', $fileName);
            $validasi['url']=$path;
            }
            $response = Product::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]);
            
        } catch(\Exception $e){
            return response()->json([
                'message'=>'Error',
                'errors'=>$e->getMessage()
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $product=Product::find($id);
            $product->delete();
            return response()->json([
                'success'=>true,
                'message'=>'success'
            ]);
        }
        catch(\Exception $e){
            return response()->json([
                'message'=>'Error',
                'errors'=>$e->getMessage()
                ]);
        }
    }
}
