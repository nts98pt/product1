<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\image;
use App\Models\Slide;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) //get
    {


        // $slide = image::all();
        // // print_r($slide);
        // // exit;
        $new_product =null;
        if ($request->filter == 'all'){
            $new_product = 'all';
        } elseif($request->filter == 'new'){
            $new_product = product::where('is_top',1)->paginate(4);
        }
        // print_r($new_product);
        // exit;
        // $all_product = product::where('is_top',1,0)->paginate(8);
        // //  print_r($all_product);
        // //  exit;
            // return $new_product;
            //return response()->json(['new_product' => $new_product]);
        return ProductResource::collection($new_product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //get
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req) //post
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //get

    {
        return new ProductResource(product::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //get
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //put/patch
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //DELETE
    {
          return product::where('id',$id)->delete();
    }
}
