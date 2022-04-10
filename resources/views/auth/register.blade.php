<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('auth.save') }}" method="POST">

        @if (Session::get('success'))
            <i>sukses</i>
        @endif

        @if (Session::get('fail'))
            <i>fail</i>
        @endif

        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
        <span>@error('name') {{ $message }} @enderror</span>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        <span>@error('email') {{ $message }} @enderror</span>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <span>@error('password') {{ $message }} @enderror</span>
        <br>
        <button type="submit">Sign Up</button>
        <br>
        <a href="{{ route('auth.login') }}">Login</a>
    </form>
</body>
</html>
