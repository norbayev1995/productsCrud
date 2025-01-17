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
    <input type="password" name="password" placeholder="password" required value="{{$user->password}}">
    <input type="number" name="age" placeholder="Age" required value="{{$user->age}}">
    <select name="status">
        <option value="active" @if($user == 'active') selected @endif>Active</option>
        <option value="inactive" @if($user == 'inactive') selected @endif>Inactive</option>
        <option value="pending" @if($user == 'pending') selected @endif>Pending</option>
    </select>
    <button type="submit">Submit</button>
</form>
</body>
</html>
