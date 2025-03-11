<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Admin Login <br>
    <form action="{{ route('LogAdmin') }}" method="POST">
        @csrf
    <input type="email" name="email" id="email" placeholder="Enter the Email"><br><br>
    <input type="password" name="password" id="password" placeholder="Enter the password"><br><br><br>
    <input type="submit" name="submit" id="submit">
</form>

</body>
</html>
