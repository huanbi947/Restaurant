<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\OrderApiController;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Order::all();
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
            'foodname' =>'required|max:100',
            'price' =>'required',
            'quantity' =>'required|max:100',
            'name' =>'required',
            'phone' =>'required|max:100',
            'address' =>'required',
            
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json("ok",400);
        }else{
            $data = new Order;

        $data->foodname = $request->foodname;
        $data->price = $request->price;
        $data->quantity= $request->quantity;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address= $request->address;
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
         $count = Order::where('id',$id)->count();
        if($count == 0){
            return response()->json("",204);
        }
        else{
         $data = Order::find($id);
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
            'foodname' =>'required|max:100',
            'price' =>'required',
            'quantity' =>'required|max:100',
            'name' =>'required',
            'phone' =>'required|max:100',
            'address' =>'required',
            
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json("ok",400);
        }else{
            $data = Order::find($id);

        $data->foodname = $request->foodname;
        $data->price = $request->price;
        $data->quantity= $request->quantity;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address= $request->address;
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
        $data = Order::findOrfail($id);
        $data->delete();
        return response()->json("Xoa Thanh cong",201);
    }
}
