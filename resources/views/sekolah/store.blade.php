<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Sekolah</title>
</head>
<body>
    <a href="{{ route('sekolah.data') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('sekolah.create') }}">
        @csrf
        <div>
            <label for="nama_sekolah"> Nama </label>
            <input type="text" name="nama_sekolah" id="nama_sekolah"/>
        </div>
        <br>
        <div>
            <label for="alamat_sekolah"> Alamat </label>
            <input type="text" name="alamat_sekolah" id="alamat_sekolah"/>
        </div>
        <br>
        <div>
            <label for="email_sekolah"> Email </label>
            <input type="text" name="email_sekolah" id="email_sekolah"/>
        </div>
        <br>
        <button type="submit" @class(['btn', 'btn-primary'])>Tambah</button>
    </form>
</body>
</html>
