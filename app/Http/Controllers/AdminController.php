<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\Order;

class AdminController extends Controller
{
    public function user(){
    	$datas = user::all();
    	return view('admin.users',compact("datas"));
    }


    public function deleteuser($id){

    	$datas = user::find($id);
    	$datas->delete();
    	return redirect()->back();
    }

    public function deletemenu($id){
    	$data = Food::find($id);
    	$data->delete();
    	return redirect()->back();
    }

     public function foodmenu(){

     	$data = Food::all();
 
    	return view('admin.foodmenu',compact('data'));
    }

    public function upload(Request $request){
 		
    	$data = new Food;

    	$imagename =time().'.'.$request->image->extension();

    	$request->image->move('foodimage',$imagename);

    	$data->image=$imagename;

    	$data->title = $request->title;

    	$data->price = $request->price;

    	$data->description = $request->description;

    	$data->save();

    	return redirect()->back();
    }

    

    public function showmenu($id){
    	$data = Food::find($id);
    	
    	return view('admin.updatemenu',compact('data'));
    }


    public function updatemenu(Request $request, $id){
    	$data = Food::find($id);

    	$imagename =time().'.'.$request->image->extension();

    	$request->image->move('foodimage',$imagename);

    	$data->image=$imagename;

    	$data->title = $request->title;

    	$data->price = $request->price;

    	$data->description = $request->description;

    	$data->save();

    	return redirect()->back();
    }

     public function reservation(Request $request){
    	$data = new Reservation;

    	$data->name = $request->name;

    	$data->email = $request->email;

    	$data->phone = $request->phone;

    	$data->guest = $request->guest;

    	$data->date = $request->date;

    	$data->time = $request->time;

    	$data->message = $request->message;

    	$data->save();

    	return redirect()->back();
    }

    public function viewreservation(){

        if(Auth::id()){

            $data = Reservation::all();

        return view("admin.adminreservation",compact('data'));

        }else

        {
            return redirect('login');
        }
    	
    }
    public function deleteReservation($id){

        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back();
        
    }

    public function viewchef(){
    	$data = Foodchef::all();
    	return view('admin.adminchef',compact('data'));
    }


    public function uploadchef(Request $request){

    	$data = new Foodchef;

    	$imagename =time().'.'.$request->image->extension();

    	$request->image->move('chefimage',$imagename);

    	$data->image=$imagename;
    	
    	$data->name = $request->name;

    	$data->speciality = $request->speciality;

    	$data->save();

    	return redirect()->back();
    }

     public function updatechef($id){
    	$data = Foodchef::find($id);
    	return view('admin.updatechef',compact('data'));
    }


     public function updatefoodchef(Request $request, $id){
    	$data = Foodchef::find($id);
    	
    	$imagename =time().'.'.$request->image->extension();

    	$request->image->move('chefimage',$imagename);

    	$data->image=$imagename;
    	
    	$data->name = $request->name;

    	$data->speciality = $request->speciality;

		$data->save();

    	return redirect()->back();
    }

    public function deletechef($id){
    	$data = Foodchef::find($id);
         if ($data != null) {
            $data->delete();
            return redirect()->back();
    }

    return redirect()->back()->with(['message'=> 'Wrong ID!!']);
    }


    public function orders(){
        $data = Order::all();
        return view("admin.orders",compact('data'));
    }

    public function search(Request $request){

        $search = $request->search;
        $data = Order::where('name','like','%'.$search.'%')->orWhere('foodname','like','%'.$search.'%')->get();
        return view("admin.orders",compact('data'));
    }
     
}
