<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @foreach ($errors->all() as $error)

        <div>{{ $error }}</div>

    @endforeach
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter Your Email">
        <input type="password" name="password" placeholder="Enter Your Password">
        <button type="submit">Login</button>
    </form>

</body>
</html>