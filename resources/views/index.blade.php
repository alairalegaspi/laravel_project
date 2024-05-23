<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Time Record</h1>
    <div>
        <a href="{{ route('create') }}">ADD</a>
    </div>
    <div class="container">
        @yield('content')
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($time as $timecard)
            <tr>
                <td>{{ $timecard->id }}</td>
                <td>{{ $timecard->name }}</td>
                <td>{{ $timecard->email }}</td>
                <td>{{ $timecard->username }}</td>
                <td>{{ $timecard->password }}</td>
                <td>
                    <a href="{{ route('edit', ['time'=>$timecard->id]) }}">EDIT</a>
                </td>
                <td>
                    <form action="{{ route('delete', ['time'=>$timecard]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
