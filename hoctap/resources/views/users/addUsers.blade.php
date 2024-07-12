<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.addPostUsers')}}" method="POST">
        @csrf
        <label for="">Ten</label>
        <input type="text" name="nameUsers">
        <br>
        <label for="">Email</label>
        <input type="text" name="emailUsers">
        <br>
        <label for="">Phong ban</label>
        <select name="phongbanUsers">
            <br>
            @foreach($phongban as $u =>$value)
            <option value="{{$value->id}}">{{$value->ten_donvi}}
            @endforeach
        </select><br>
        <label for="">Tuoi</label>
        <input type="text" name="tuoiUsers"><br>
        <button>Them moi</button>
    </form>
</body>
</html>