<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-offset-4">
                <h4>Registration</h4>
                <form action="{{ route('registerUser') }}" method="post">
                    @if(Session::has('success'))
                    <div class="alertalert-success">{{ Session:: get('success') }}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alertalert-danger">{{ Session:: get('fail') }}</div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-group" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{$message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-group" placeholder="Enter Name" name="email"value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-group" placeholder="Enter Name" name="username" value="">
                        <span class="text-danger">@error('username'){{ $message }}@enderror</span>

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-group" placeholder="Enter Password" name="password" value="">
                        <span class="text-danger">@error('[password]'){{$message }}@enderror</span>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    <br>
                    <a href="login">Login Here!</a>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
