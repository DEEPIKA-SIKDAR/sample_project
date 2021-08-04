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
  #color{background-color:black}
  body{background-color:#000000;}</style>

</head>
<body >

  <div class="container mt-3">
     


    <h2 class="center text-light" text-shadow: 2px 2px red;>NEW USER REGISTER HERE</h2>
    
  
    <div class="container col-sm-4 mt-4" >
      
      <div class ="card " style=" box-shadow:10px 10px 10px hsl(107, 33%, 92%) "  >
         <div  class="card-header padding-top:50px "  style="background-color:#c0f583">
          @if(Session::has('login'))
          {{-- <div class="alert alert-success" role="alert"> --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>congratulation</strong> successful.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div> 
         
          {{ Session::get('login') }}
          {{-- </div>  --}}
          @endif 
            {{-- <div class="text-center">
              <a class='btn btn-info float-right'>list</a>
            </div> --}}
          </div>
      
          <div class="card-body"style="background-color:#c0f583">
           
            <form action="{{URL('/user-register')}}" method="post">
                @csrf
              <div class="form-group">
                <label for="first_name"><b><i>first name:</i></b></label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
              </div>
              <div class="form-group">
                <label for="last_name"><b><i>last name:</b></i></label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
              </div>
              <div class="form-group">
                <label for="email"><b><i>Email:</b></i></label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd"><b><i>Password:<b><i></label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <div class="from-group form-check">
                <button type="submit" class="btn btn-primary" ><b>submit</b></button>
                
                <a class='btn btn-info float-right' href="login"><b>back</b></a>
              </div>
            </form>
          </div>
        </div>
       
    </div>  
  </div>
  </div>
  


</body>
</html>