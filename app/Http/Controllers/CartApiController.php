<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CArtApiController;
use App\Models\Cart;
use Illuminate\Support\Facades\Validator;

class CartApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Cart::all();
        return response()->json($data,201);
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
        $rules=[
            'user_id' =>'required',
            'food_id' =>'required',
            'quantity' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json("loi",400);
        }else{
            $data = new Cart;

        $data->user_id = $request->user_id;
        $data->food_id = $request->food_id;
        $data->quantity= $request->quantity;
        $data->save();
        //$request->session()->put('last_class_name',$class->name);
        return response()->json("thanh cong",201);
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
        $count = Cart::where('id',$id)->count();
        if($count == 0){
            return response()->json("",204);
        }
        else{
         $data = Cart::find($id);
            return response()->json($data,201);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $rules=[
            'user_id' =>'required|max:100',
            'fodd_id' =>'required',
            'quantity' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json("ok",400);
        }else{
            $data =Cart::find($id);

        $data->user_id = $request->user_id;
        $data->food_id = $request->food_id;
        $data->quantity= $request->quantity;
        $data->save();
        //$request->session()->put('last_class_name',$class->name);
        return response()->json("thanh cong",201);
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
        $data = Cart::findOrfail($id);
        $data->delete();
        return response()->json("Xoa Thanh cong",201);
    }
}
