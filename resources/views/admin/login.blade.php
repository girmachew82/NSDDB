<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Debre Birhan university">
    <meta name="keywords" content="DBU, Debre, Birhan">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">

    <title>DBU</title>

</head>
<body>

    <div class="card card-primary" style="margin-left: 200px; margin-right: 200px; margin-top: 20px;">
        <div class="card-header">
        <h3 class="card-title">Login</h3>
        </div>


        <form action="login" method="POST">
            @csrf
        <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
            </div>

</body>
</html>




