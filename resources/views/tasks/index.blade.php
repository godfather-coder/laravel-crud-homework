<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{route('tasks.create')}}"> Create Todo</a>
    <table>
        <thead>
            <tr>
                <th style="color:blue">სახელი</th>
                <th style="color:rgb(15, 96, 42)">აღწერა</th>
                <th style="color:rgb(255, 0, 0)">რედაქტირება</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th style="color:blue">{{ $task->name }}</th>
                    <th style="width:100px; color:rgb(15, 96, 42)">{{ $task->description }}</th>
                    <th>
                        <a href="{{route('tasks.edit',['task' => $task->id])}}">რედაქტირება</a>
                        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button style="background-color:rgb(255, 0, 0)">წაშლა</button>
                        </form>
                    </th>
                    </td>

                </tr>>
            @endforeach
        </tbody>
    </table>
</body>

</html>
