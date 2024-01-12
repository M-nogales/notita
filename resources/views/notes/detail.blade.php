<!DOCTYPE html>
<html>

<head>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1>Una Nota concreta según su id desde base de datos</h1>
    <p>{{$note->title}}</p>
    <p>{{$note->text}}</p>
</body>

</html>
