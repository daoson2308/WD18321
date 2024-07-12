<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.addUsers')}}">Them moi</a>
    <h3>Danh sach list user</h3>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phong ban</td>
                <td>Hanh dong</td>
            </tr>
        </thead>
        <tbody>
            @foreach($listUsers as $u =>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phongban_id}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>