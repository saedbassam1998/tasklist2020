<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Document</title>
</head>
<body>
    @foreach($tasks as $task)
    <h3><a href="/task/{{task->id}}"{{$task->name}}></a></h3>
    @endforeach
</body>
</html>