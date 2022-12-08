<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
    <a href="{{ route('siswa.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('siswa.update', ["id" => $siswa->id]) }}">
        @method("put")
        @csrf
        <label for="nama_siswa"> Nama </label>
        <input type="text" name="nama_siswa" id="nama_siswa" value="{{ $siswa->nama_siswa }}"/>
        <br>
        <label for="alamat_siswa"> ALamat </label>
        <input type="text" name="alamat_siswa" id="alamat_siswa" value="{{ $siswa->alamat_siswa }}"/>
        <br>
        <label for="email_siswa"> Email </label>
        <input type="text" name="email_siswa" id="email_siswa" value="{{ $siswa->email_siswa }}"/>
        <br>
        <label for="password_siswa"> Password </label>
        <input type="text" name="password_siswa" id="password_siswa" value="{{ $siswa->password_siswa }}"/>
        <br>
        <label for="jenis_kelamin_siswa"> Jenis Kelamin </label>
        <select name="jenis_kelamin_siswa" id="jenis_kelamin_siswa">
            <option value="Laki-laki" {{ $siswa->jenis_kelamin_siswa == 'Laki-laki' ? "selected" : ""}}>Lkai-Laki</option>
            <option value="perempuan" {{ $siswa->jenis_kelamin_siswa == 'perempuan' ? "selected" : ""}}>Perempuan</option>
        </select>
        <div>
            <label for="tanggal_lahir_siswa"> Tanggal Lahir </label>
            <input type="date" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa" value="{{ $siswa->tanggal_lahir_siswa }}"/>
        </div>
        <br>
        <div>
            <label for="nisn_siswa">NISN</label>
            <input type="text" name="nisn_siswa" id="nisn_siswa" value="{{ $siswa->nisn_siswa }}"/>
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
        <button type="submit" @class(['btn', 'btn-primary'])>Update</button>
    </form>
</body>
</html>
