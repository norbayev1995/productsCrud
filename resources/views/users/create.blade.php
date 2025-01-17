<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
<h1>Create User</h1>
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="number" name="age" placeholder="Age" required>
    <select name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
        <option value="pending">Pending</option>
    </select>
    <button type="submit">Submit</button>
</form>
</body>
</html>
