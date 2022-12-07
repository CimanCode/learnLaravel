<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
</head>
<body>
    <a href="{{ route('user.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('user.create') }}">
        @csrf
        <div>
            <label for="Nama"> Nama </label>
            <input type="text" name="Nama" id="Nama"/>
        </div>
        <br>
        <div>
            <label for="email"> Email </label>
            <input type="text" name="email" id="email"/>
        </div>
        <br>
        <div>
            <label for="password"> Password </label>
            <input type="text" name="password" id="password"/>
        </div>
        <br>
        <div>
            <label for="role"> Role </label>
            <select name="role" id="role">
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Guest</option>
            </select>
        </div>

        <button type="submit" @class(['btn', 'btn-primary'])>Tambah</button>
    </form>
</body>
</html>
