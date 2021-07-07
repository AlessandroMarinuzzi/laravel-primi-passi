<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello world!</h1>
    <h2>{{$title}}</h2>
    <h3>{{$description}}</h3>
    @foreach($students as $student)
        <h4>{{$student}}</h4>
    @endforeach
    
</body>
</html>
