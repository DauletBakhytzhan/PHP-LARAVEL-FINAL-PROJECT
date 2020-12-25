<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\kitchen;
use App\Models\kitchens;
use App\Models\User1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller{
    public function home(){

        return view('home', ['data'=> kitchens::all()]);
    }
    public function addkitchenget(){

        return view('addkitchen');
    }
    public function app(){
        return view('app');
    }

    public function registration(){
        return view('registration');
    }

    public function login(){
        return view('login');
    }
    public function profile($id){
            $user = new User1;


        if(session()->has('email')){
            return view('profile', ['data'=> $user->find($id)]);
        }

        return redirect('login');
    }



    public function review(){
        $reviews =  new kitchen();
        return view('review');
    }
    public function review_check(Request $request){
//        $valid = $request->validate([
//            'email'=>'required|min:4|max:100',
//            'title'=>'required|min:4|max:100',
//            'message'=>'required|min:15|max:900'
//        ]);
//
//        $review = new Contact();
//        $review->email = $request->input('email');
//        $review->title = $request->input('title');
//        $review->message = $request->input('message');
//
//        $review->save();

        return redirect()->route('review');
    }
    public function index(){
        print("123");
        return kitchens::all();

    }

    public function addkitchen(Request $request){
        $kitchen = new kitchens;
        $kitchen->address = $request->get('address');
        $kitchen->description = $request->get('description');
        $kitchen->name = $request->get('name');
        $kitchen->Url = $request->get('url');
        $kitchen->price_for_one = $request->get('price_for_one');
        $kitchen->city = "almaty";
        $kitchen->state = "kz";
        $kitchen->hours = "123";
        $kitchen->latitude = 11;
        $kitchen->longitude = 11;
        $kitchen->rating = 11;



        $kitchen->save();
        return redirect('/  ');


    }


    public function details($id){
        $k = new kitchens;
        $kitchens = new kitchens;
        return view('about', ['data'=> $kitchens->find($id)]);
    }
}
