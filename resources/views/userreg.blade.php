<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ Route('Userreg') }}" method="POST" >
    @csrf
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
