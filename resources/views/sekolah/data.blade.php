<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Sekolah</title>
</head>
<body>
    <a href="{{ route('sekolah.store') }}"><button>Tambah Sekolah</button></a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $sekolah as $sk)
                <tr>
                    <td>{{ $sk ->nama_sekolah}}</td>
                    <td>{{ $sk ->alamat_sekolah}}</td>
                    <td>{{ $sk ->email_sekolah}}</td>
                  <td>
                        <a href="{{ route('sekolah.destroy', ['id' => $sk->id]) }}"><button>Hapus</button></a>
                    </td>
                    <td>
                        <a href="{{ route('sekolah.update', ['id' => $sk->id]) }}"><button>Update</button></a>
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
