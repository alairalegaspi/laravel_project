<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NOLITC TIME TRACKER</title>
<link rel="stylesheet" href="welcome.css">
</head>
<body>

<div class="welcome-container">
    @yield('content')

  <h1>NOLITC TIME TRACKER</h1>
  <h4>Select your role</h4>
  <div class="button-container">
    <a href="{{ route('admin') }}" class="button">Admin</a>
    <a href="{{ route('student') }}" class="button">Student</a>
    <a href="{{ route('facilitator') }}" class="button">Facilitator</a>
  </div>
</div>

</body>
</html>
