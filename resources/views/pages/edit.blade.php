<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Create</h1>
<form action="{{ route('store') }}" method="post">
    @csrf
    @method('put')
    <div class="container">
        <label for="">Name: </label>
        <input type="text" name="name" id="name"><br>
    </div>
    <div class="container">
        <label for="">Email: </label>
        <input type="email" name="email" id="email"><br>
    </div>
    <div class="container">
        <label for="">Username: </label>
        <input type="text" name="username" id="username"><br>
    </div>
    <div class="container">
        <label for="">Password: </label>
        <input type="password" name="password" id="password"><br>
    </div>
    <div class="container">
        <input type="submit" value="Update"><br>
    </div>
</form>
</body>
</html>
