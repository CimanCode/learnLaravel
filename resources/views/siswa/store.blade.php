<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
</head>
<body>
    <a href="{{ route('siswa.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('siswa.create') }}">
        @csrf
        <div>
            <label for="nama_aiswa"> Nama </label>
            <input type="text" name="nama_aiswa" id="nama_aiswa"/>
        </div>
        <br>
        <div>
            <label for="alamat_siswa"> Alamat </label>
            <input type="text" name="alamat_siswa" id="alamat_siswa"/>
        </div>
        <br>
        <div>
            <label for="email_siswa"> Emial </label>
            <input type="text" name="email_siswa" id="email_siswa"/>
        </div>
        <br>
        <div>
            <label for="password_siswa"> Password </label>
            <input type="password" name="password_siswa" id="password_siswa"/>
        </div>
        <br>
        <div>
            <label for="jenis_kelamin_siswa"> Jenis Kelamin </label>
            <select name="jenis_kelamin_siswa" id="jenis_kelamin_siswa">
                <option value="Laki-laki">Laki-Laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </div>
        <br>
        <div>
            <label for="tanggal_lahir_siswa"> Tanggal Lahir </label>
            <input type="date" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa"/>
        </div>
        <br>
        <div>
            <label for="nisn_siswa">NISN</label>
            <input type="text" name="nisn_siswa" id="nisn_siswa"/>
        </div>
        <br>
        <div>
            <label for="sekolah_id">Nama Sekolah</label>
            <select name="sekolah_id" id="sekolah_id">
                @foreach ( $sekolah_id as $sekolah )
                    <option value={{ $sekolah->id }}>{{ $sekolah->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" @class(['btn', 'btn-primary'])>Tambah</button>
    </form>
</body>
</html>
