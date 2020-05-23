<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SubscriberController extends Controller
{
   
      public function headerfooter(){

       return view('headerfooter');
    
      }
       public function store(Request $request){
    
          // for checking if code works   
                // dd($request-> all()); 

               $this->validate($request, [
                'email' => 'required|unique:subscribers|email'
                ]);
                              
            $email = $request->input('email');
                           
            DB::table('subscribers')->insert(
              array(
                 'email'   =>  ($email)
              )
         );
                           
              return redirect()->back()->with('flash_message', 'You will receive updates'); 
                          
           }
    
    }
    