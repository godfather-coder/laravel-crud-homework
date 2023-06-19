<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create product</h1>

    <form action="{{route('tasks.update',['task'=>$task->id])}}" method="post">
        @csrf
        @method("PUT")
        <div>
            <label>Name</label>
            <br>
            <input type="text" value="{{$task->name}}" name="name">
        </div><br>
        <div>
            <label>Description</label>
            <br>
            <input  value = {{$task->description}} name="description">
        </div><br>

        <button type="submit"> submit</button>
    </form>
</body>
</html>
