<!DOCTYPE html>
<html>
<head>
	<title>raipur</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
        body {background-color: rgb(111, 87, 243);
          background-attachment: scroll;}
    .center{text-align: center; border-style: hidden; border-color: #554df7;}
    #bor{border-color: black; border-style:solid; border-width: medium;}
    #car{margin-top: 40px; border-radius: 1px;}
    #card{border-color: rgba(3, 3, 8, 0.644); border-style: solid; background-color: rgb(72, 75, 240); border-radius: 2px; margin-top: 2px;}
    #tron{background-color: rgb(47, 87, 173);}
    #di{border-radius: 2px; margin-top: 13px;}
    #jumbo{background-color: rgb(42, 70, 230); margin-top: 0%;}
    #text{color: white; text-align: center;}
    #h{text-align: center; color: white;}
  </style>
 

</head>
<body>
     <div class="container " id="bor">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#"><img src="image/download.jpg" style="width: 40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" id="bor">
            <!--<div class="navbar navbar-expand-sm bg-light">-->
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">Home <!--<span class="sr-only">(current)--></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">images</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">video</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-lg-0 " type="submit">Search</button>
            </form>
        </div>
        </nav>
   <div class="container pt-5">
    <div class="card-group">
        <div class="row">
       
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/download (2).jpg" class="card-img">
                
                </div>
                <h6 class= card-title id="text">new raipur</h6>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/download.jpg" class="card-img">
                    
                </div>
                <p id="text" >ghadi chowk</p>
                
            </div>
      
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (1).jpg" class="card-img">
                
                </div>
                <h6 class= card-title  id="text">white house</h6>
            </div>
       
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (3).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">energy park</h6>
            </div>
        
            <div class="col-sm-3">
                <div class="card">
                
                    <img src="image/images (5).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">AIIMS</h6>
            </div>
       
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (7).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">babyloan hotel</h6>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/download (4).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">time squre</h6>
            </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="image/images.jpg" class="card-img">
                        
                    </div>
                    <h6 class= card-title id="text">swami vivekanand sarovar</h6>
                </div>
                <div class="col-sm-3">
                    <div class="card" id="bor">
                        <img id="bor" src="image/download (3).jpg" class="card-img">
                    
                    </div>
                    <h6 class= card-title id="text">marin drive</h6>
                </div>
       
       
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (6).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">new raipur road</h6>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (8).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">marin drive</h6>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (2).jpg" class="card-img">
                
                </div>
                <h6 class= card-title id="text">telibandha</h6>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/images (4).jpg" class="card-img">
                    
                </div>
                <h6 class= card-title id="text">railway</h6>
            </div>
        </div>
     </div>
    </div>
</div>
      

   </div> 
   <div class="container mt-4" id="bor" style="float:center">
    <div class="panel panel-primary">
         <div class="panel-heading"></h2></div>
         <div class="panel-body">
      
           @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
           </div>
           <img src="images/{{ Session::get('image') }}">
           @endif
     
           @if (count($errors) > 0)
               <div class="alert alert-danger">
                   <strong>Whoops!</strong> There were some problems with your input.
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
               @endif
 
       <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="row">
 
               <div class="col-md-6">
                   <input type="file" name="image" class="form-control">
               </div>
  
               <div class="col-md-6">
                   <button type="submit" class="btn btn-success">Upload</button>
               </div>
  
           </div>
       </form>
 
     </div>
  
</div>
</div>
</div>

</body>
</html>     