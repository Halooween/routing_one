<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ url('/store') }}" method="POST">
        @csrf
                <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" name="create" class="btn btn-primary" value="Submit">
    </form>
    <a href="{{ route('dashboard.index') }}">update</a>
</body>
</html>