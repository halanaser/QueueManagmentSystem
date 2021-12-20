
     <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register Boxed - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="{{asset('dashboard/main.d810cf0ae7f39f28f336.css')}}" rel="stylesheet"></head>

<body>
    <div  class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                      <div class="app-logo-inverse mx-auto mb-3"></div>
                         <div class="modal-dialog w-100">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="modal-title">
                                        <h4 class="mt-2">
                                        @foreach($NEWCustomer as $NEWCustomers)

                                            <div>{{$NEWCustomers->name}}</div>
                                            <span> SERRIAl NO: <span class="text-success">{{$NEWCustomers->ticketNo}}
                                        </h4>
                                    </h5>
                                 
                                   
                                      
                                </div>
                                <div class="widget-chart">
                                    <div class="widget-chart-content">
                                       
                                        <div class="widget-numbers">
                                    
                                            <span>{{$NEWCustomers->queueNo}}</span>
                                            
                                      
                                        </div>
                                        <div class="widget-subheading pt-2">
                                        {{$NEWCustomers->created_at}}
                                        </div>
                                        <div class="widget-description text-danger">
                                            <span class="pr-1"><span> <a onclick="event.preventDefault(); document.getElementById('submit-form').submit();" href="{{Route('destroy', $NEWCustomers->id)}}">Leave Queue</a></span></span>
                                            <i class="fa fa-arrow-left"></i>
                                            <form id="submit-form" action="{{ route('destroy', $NEWCustomers->id)}}" method="POST" class="hidden"> @csrf</form>
                                        </div>
                                    </div>
                                 
                             
                            @break
                                          @endforeach       
                         
                                <div class="modal-footer d-block text-center">
                                <a href="{{Route('index')}}">
                                    <button type="submit"  class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Ok</button>
                                    </a>
                                </div>

                     </div>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('dashboard/scripts/main.d810cf0ae7f39f28f336.js')}}"></script></body>

</html>