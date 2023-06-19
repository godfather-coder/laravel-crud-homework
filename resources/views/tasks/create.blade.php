<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create product</h1>

    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <div>
            <label>Name</label>
            <br>
            <input type="text" name="name">
        </div><br>
        <div>
            <label>Description</label>
            <br>
            <input type="text"  name="description">
        </div><br>

        <button type="submit" > submit</button>
    </form>
</body>

</html>
