<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FoodApiController;
use App\Models\Food;
use Illuminate\Support\Facades\Validator;

class FoodApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Food::all();
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
            'title' =>'required|max:100',
            'price' =>'required',
            'description' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json("ok",400);
        }else{
            $data = new Food;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->image= $request->image;
        $data->description = $request->description;
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
        $count = Food::where('id',$id)->count();
        if($count == 0){
            return response()->json("",204);
        }
        else{
         $data = Food::find($id);
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
            'title' =>'required|max:100',
            'price' =>'required',
            'description' =>'required'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json("ok",400);
        }else{
            $data =Food::find($id);

        $data->title = $request->title;
        $data->price = $request->price;
        $data->image= $request->image;
        $data->description = $request->description;
        $data->save();
        //$request->session()->put('last_class_name',$class->name);
        return response()->json(" sua thanh cong",201);
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
        $data = Food::findOrfail($id);
        $data->delete();
        return response()->json("Xoa Thanh cong",201);
    }
}
