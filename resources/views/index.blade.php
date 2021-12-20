<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WElCome!!</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<link href="{{asset('dashboard/main.d810cf0ae7f39f28f336.css')}}" rel="stylesheet"></head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome ...</div>
                                            <span >Enter your name and your service to join the queue..</span>
                                        </h4>
                                    </div>
                                    <form method="post" action="{{Route('create')}}" >
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="name" placeholder="Name here..."  class="form-control" require>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                <select id="service"  name="service"class="multiselect-dropdown form-control" require>
                                               
                                                @foreach($services as  $service)
                                            <option value="{{$service->id}}">{{$service->service}}</option>
                                          
                                     @endforeach
        
                                    </select>     
 
                                            </div>
                                            </div>
                                        </div>
                                   
                                    
                            
                                    
                                </div>
                                <a href="javascript:void(0);" class="btn-lg btn btn-link">about us</a>
                                
                                   
                                    <div class="text-center d-block p-3 card-footer">
                                        <button type="submit"class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">Join Queue</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('dashboard/assets/scripts/main.d810cf0ae7f39f28f336.js')}}"></script></body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>