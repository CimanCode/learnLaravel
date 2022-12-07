<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
    <a href="{{ route('user.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('user.update', ["id" => $user->id]) }}">
        @method("put")
        @csrf
        <label for="Nama"> Nama </label>
        <input type="text" name="Nama" id="Nama" value="{{ $user->Nama }}"/>
        <br>
        <label for="email"> Email </label>
        <input type="text" name="email" id="email" value="{{ $user->email }}"/>
        <br>
        <label for="password"> Password </label>
        <input type="text" name="password" id="password" value="{{ $user->password }}"/>
        <br>
        <label for="role"> Role </label>
        <select name="role" id="role">
            <option value="1" {{ $user->role == 1 ? "selected" : ""}}>Admin</option>
            <option value="2" {{ $user->role == 2 ? "selected" : ""}}>User</option>
            <option value="3" {{ $user->role == 3 ? "selected" : ""}}>Guest</option>
        </select>
        <button type="submit" @class(['btn', 'btn-primary'])>Update</button>
    </form>
</body>
</html>
