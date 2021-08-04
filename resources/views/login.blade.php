<!DOCTYPE html>
<html lang="en">
<head>
  <title>login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style> h2{text-align:center text-color:white}
  .center{text-align:center}
  #color{background-color:#f0b7e8}
  body{background-color:#000000;}
  </style>

</head>
<body>
    <div class="container box mt-4">
        <h3 class="center text-light"></i>Login here</i><br></h3>
        {{-- @if(isset(Auth::user()->email))
            <script>window.location="/successlogin";</script>
        @endif--}}
         


         {{-- @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all()as $errors)
                <li>{{$error}}</li>

                    
                @endforeach
            </ul>
            
        @endif --}}
        <div class="container col-sm-6 mt-5">
          <div class="card " style=" box-shadow:10px 10px 10px hsl(107, 33%, 92%) "  >
          <div class="card-header" style="background-color:#c0f583" >
                @if($message=Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong> {{$message}}</strong>
            </div>
                
            @endif 


          </div>
        <div class="card-body" style="background-color:#c0f583" >
        
                <form action="{{URL('/check-login')}}" method="post">
                    @csrf
                     <div class="form-group">
                        <label for="email"><b><i>Email:</i></b></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd"><b><i>Password:</i></b></label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember"><b><i> Remember me</i></b>
                        </label>
                      </div>
                      <div class="from-group form-check">
                        <button type="submit" class="btn btn-primary">submit</button>
                        <a class='btn btn-info float-right' href="registration">registration</a>
                      </div>
                </form>
        </div>
                

          </div>

        </div>
    </div>       

        


</body>
</html>