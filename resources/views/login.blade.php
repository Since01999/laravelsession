<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
           {{-- <h2> {{$user}}</h2>
           <h2> {{$city}}</h2>
           <h2> {{$price}}</h2> --}}


           {{-- <h3>{{$data['user']}}</h3>
           <h3>{{$data['city']}}</h3> --}}



           <h2>
               Data Using global Variable
           </h2>
           {{-- {{$name}} --}}

           <h2>
            flash Variable
        </h2>
        {{$data}}
            <div class="col-md-6">
                <h3>Login Using Sessions</h3>
        <form action="/userlogin" method="POST">
              @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
               
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
    </div>
</div>

</body>
</html>