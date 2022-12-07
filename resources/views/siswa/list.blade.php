<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
</head>
<body>
    <a href="{{ route('siswa.store') }}"><button>Tambah Siswa</button></a>
    <table border="1" style="border-collapse: collapse">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>NISN</th>
                <th>Nama Sekolah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_aiswa}}</td>
                    <td>{{ $siswa->alamat_siswa}}</td>
                    <td>{{ $siswa->email_siswa}}</td>
                    <td>{{ $siswa->jenis_kelamin_siswa}}</td>
                    <td>{{ $siswa->tanggal_lahir_siswa}}</td>
                    <td>{{ $siswa->nisn_siswa}}</td>
                    <td>{{ $siswa->sekolah->nama_sekolah}}</td>
                  <td>
                        <a href="{{ route('siswa.destroy', ['id' => $siswa->id]) }}"><button>Hapus</button></a>
                    </td>
                    <td>
                        <a href="{{ route('siswa.update', ['id' => $siswa->id]) }}"><button>Update</button></a>
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
