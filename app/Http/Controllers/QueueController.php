<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Service;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QueueController extends Controller

{
      
    public function Admin($id=null){
        $services=Service::all();
       
        $customers=Customer::whereDay('created_at', '=', date('d'))->get();
       
      
        if($id){
            $service=Service::where('id','=', $id)->first();
          
            $customers=Customer::where('service_id','=', $service->id)
            ->whereDate('created_at', Carbon::today())
            ->get();
            view('Admin',[
                'services'=> $services,
                'customers'=>$customers,
                'windows'=>$service->window
            ]); 
        }
        return view('Admin',[
            'services'=> $services,
            'customers'=>$customers,
            'windows'=>null
        
        ]);

    }
    public function Admindestroy($id){

        Customer::find($id)->delete();
      
              
        return redirect('Admin');;
    
       }
    public function index(){
        $services=Service::all();
          
        return view('index',['services'=> $services]);

    }

    
    public function create(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'service'=>'required'
            ]
            );
         
            Customer::whereDate('created_at', '<',Carbon::today())->delete();
            
            $max=Customer::whereDate('created_at', Carbon::today())->max('queueNo');
            If($max == null){
                $max=0;
            }
            // dd($max);
            $queueNo=$max+1;
          
            $NEWCustomers=Customer::create([
                'name'=>$request->name,
                'service_id'=>$request->service,
                'queueNo'=>$queueNo,
                'ticketNo'=>rand(1000, 99999),


            ]);
            $NEWCustomer=$NEWCustomers::where('queueNo',$queueNo)->get();
     
        return view('show',[
            'NEWCustomer' =>$NEWCustomer
        ]);

    }

   public function destroy($id){

    Customer::find($id)->delete();
    $services=Service::all();
          
    return view('index',['services'=> $services]);

   }
   
    
    
  
}
