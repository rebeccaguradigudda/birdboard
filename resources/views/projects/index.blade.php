<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bird Board</title>
</head>
<body>

    <ul>
        @foreach($projects as $project)
            <li>{{ $project -> title }}</li>
        @endforeach    
    </ul>
    
</body>
</html>