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
	#fl{float:left;}
 </style>
 

</head>
<body>
	
	{{-- <div class=" container box col-sm-3 " style="background-color: blanchedalmond float:left">
		<p style="color:blue; text:light">Welcome: {{Session::get('name') .' email: '.Session::get('email')}}</p>
		</div> --}}
	<div class="container " id="bor">
		<div class=" container box col-sm-2" style="background-color: blanchedalmond" id="fl">
			<h6  style="color:blue; text:light">Welcome: {{Session::get('name') }}</h6>
			<p style="color:blue; text:light">contact gmail: {{Session::get('email')}}</p>
			</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="margin-top: 3px;">
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
        <a class="nav-link" href="{{URL('/image')}}">images</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">video</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-2 " type="search" style="text:light">Search</button>
      <a class="btn btn-info" href="{{url('/logout')}} " style="float:right">logout</a></h1>
    </form>
  <!--</div>-->
</nav>
	

		<!--<div class="jumbotron text-center"  id="jumbo" style="margin-right:auto">-->
			<h2 id="h">CAPITAL OF CHHATTISGARH</h2>
			
			{{-- <h6>hello,{{Session::get('name')}}</h6> 
			 <h6>hello,{{Session::get('email')}}</h6> --}}
			 {{-- $name = $req->session()->get('last_name');
        $email = $req->session()->get('email'); --}}
           
				
			
			<div class="row" id="di">
				
				<div id="bor" class="col-sm-4">
					
					<div class="card" id="car" >
						
					<a class="center" href="#">place</a><br>
					<a class="center" href="#">education</a><br>
					<a class="center" href="#">historical palce</a><br>
					<a class="center" href="#">auditorium</a><br>
					<a class="center" href="#">park</a><br>
					<a class="center" href="#">stadium</a><br>
					<a class="center" href="#">libarary</a><br>
					<a class="center" href="#">industries</a><br>
					
					</div>
				</div>
				
			
		

				
				<div class="card col-sm-8" id="card">
					<div class="card">
						<div class="card-header" id="card">
							<h2 class="card-title">Welcome to raipur</h2>

							
						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<p class="center" class="card-text">raipur is the capital city of the 
										Indian state of Chhattisgarh. Raipur is also the administrative headquarters
										 of Raipur district and Raipur division, and the largest city of the state.
										  It was a part of Madhya Pradesh before the state of Chhattisgarh was formed on 1 
										  November 2000.[4] It has exponential industrial growth, and has become a major 
										  business hub in central India.</p>
									
								</div>
								<div class="col-md-6">
									<img class="card-img-right" src="{{asset('images\1627970059.jpg')}}">
									<p>. Raipur is ranked 7th in Ease of Living Index 2019 and 
										7th in Municipal Performance Index 2020 by Union Ministry of Housing and Urban Affairs</p>
									
								</div>
								
								<div class="col-md-6">
									
								</div>
							</div>
							
							

							
						</div>

						<div class="card-footer">

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">fill feadback</button>
							<div class="modal fade" id="mymodal">
								<div class="modal-dialog modal-dialog-scrolable modal-dialog-centered ">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">give feedback</h4>
											<button type="button" class="close" data-dismiss="modal">x</button>
										</div>

										<div class="modal-body">
											<form>
												<label for="fname" >name</label>
												<input type="text" id="fname" name="fname"><br>
												<label for="email">email</label>
												<input type="password" id="email" name="passward"><br>
												<label for="passward">passward</label>
												<input type="passward" id="passward " name="passward"><br>
												<label for="checkbox">i like raipur</label>
												<input type="checkbox">
								
												
											</form>
											
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-danger">Exit</button>
											
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		<!--</div>-->








		<div class="body-footer">
			<ol class="pagination pagination-lg justify-content-center">
				<li class="page-item"><a class="page-link" href="#">previous<</a></li>
				<li><a class="page-link" href="#">1</a></li>
				<li><a class="page-link" href="#">3</a></li>
				<li><a class="page-link" href="#">2</a></li>
				<li><a class="page-link" href="#">next></a></li>
				<li><a class="page-link" href="1"></a><li>
							

				
				
			</ol>
				
			</div>
			
		</div>

	</div>

</body>
</html>