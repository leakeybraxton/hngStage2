<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>One small step for man</h1>

    <form action="{{url('/uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf

        <input type="text" name="name" placeholder="Name">

        <input type="text" name="description" placeholder="Description">

        <input type="file" name="file">

        <input type="submit" value="Submit">

    </form>
</body>
</html>