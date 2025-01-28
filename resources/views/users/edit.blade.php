<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Edit</title>
</head>
<body>
<h1>Create Edit</h1>
<form action="{{ route('users.update', ['user' => $user]) }}" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="name" placeholder="name" required value="{{$user->name}}">
    <input type="email" name="email" placeholder="email" required value="{{$user->email}}">
    <button type="submit">Submit</button>
</form>
</body>
</html>
