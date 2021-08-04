<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container box">
        <h3>simple login</h3>

        @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>welcome{{Auth::usser()->email}}</strong>
            <a href="{{url('/Auth/logout')}}">logout</a>
        </div>
    
            
        @else
        <script>window.location="/login";</script>
        
            
        @endif

        

    </div>
    
</body>
</html>