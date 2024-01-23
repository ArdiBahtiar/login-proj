<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARD Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center"><b>ARD</b><br>Ardi's Research n Development</h3>
            <hr>                                                                        <!-- hr buat pembatas dari suatu tema-->
            @if(session('error'))                                                       <!-- digunakan kalo email sama password salah-->
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif                                                                      <!-- penutup if di laravel blade, atau kalo belom selese tambahin aja @else dulu-->
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf                                                                       <!-- you should include a hidden CSRF _token field in the form so that the CSRF protection middleware can validate the request-->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>
</html>