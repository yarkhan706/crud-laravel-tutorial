<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TODO</h1>
    <form action="/" method="post">
        @csrf
        <label for="title"> Title:</label>
        <input type="text" name="title">
        <label for="desc">Description</label>
        <input type="text" name="desc">
        <input type="submit" name="ADD" value="ADDED">
    </form>
    <div class="todo">
        @foreach ($todos as $todo)
        <div>
            <div @class($todo->isDone ? 'echo "done";' : '')>
                <h1>{{$todo->title}}</h1>
                <p>{{$todo->description}}</p>
            </div>
            <div>
                <form action="/{{$todo -> id}}" method="post">
                    @method('PATCH')
                    @csrf
                    <button>DONE</button>
                </form>
                <form action="/{{ $todo -> id}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button>delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>