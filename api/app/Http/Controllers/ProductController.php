<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {

            $product = Product::query()
                ->with('inventory:id,product_id,size');

            if(!is_null($request->get('name'))) {
                $product->where('name', 'LIKE', "%".$request->get('name')."%");
            }

            if(!is_null($request->get('value'))) {
                $value = ($request->get('value') == 'min') ? 'ASC' : 'DESC';
                $product->orderBy('value', $value);
            }

            return response()->json([
                "error" => false,
                "data" => $product->paginate( !empty($request->get('per_page')) ? $request->get('per_page') : 5 ),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "data" => [
                    "message" => $e->getMessage(),
                    "code" => $e->getCode(),
                ],
            ], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
