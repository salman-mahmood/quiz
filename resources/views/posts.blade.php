<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ Route('publishpost') }}" method="POST" >
    @csrf

    <label for="name"><b>Title</b></label>
    <input type="text" placeholder="Title" name="title" id="title" required>

    <label for="psw"><b>Content</b></label>
    <input type="textarea" placeholder="Content" name="content" id="content" required>

    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
