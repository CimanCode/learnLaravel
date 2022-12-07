<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar User</title>
</head>
<body>
    <a href="{{ route('user.store') }}"><button>Tambah User</button></a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $user as $users)
                <tr>
                    <td>{{ $users ->Nama}}</td>
                    <td>{{ $users ->email}}</td>
                    <td>{{ $users ->role }}</td>
                    <td>{{ $users ->isActive ? "Ya" : "Tidak"}}</td>
                    <td>
                        <a href="{{ route('user.destroy', ['id' => $users->id]) }}"><button>Hapus</button></a>
                    </td>
                    <td>
                        <a href="{{ route('user.detail', ['id' => $users->id]) }}"><button>Update</button></a>
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
