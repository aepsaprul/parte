<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <title>{{ config('app.name', 'parte') }}</title>
  <link rel="shortcut icon" href="{{ asset('assets/1.jpg') }}" type="image/x-icon">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <div>
    <img src="{{ asset('assets/1.jpg') }}" alt="">
  </div>
  <div>
    <div>
      <h1>Form Pendaftaran</h1>
    </div>
    <div>
      <div>
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" placeholder="Masukkan NIK">
      </div>
      <div>
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
      </div>
      <div>
        <label for="telepon">Nomor Handphone</label>
        <input type="text" name="telepon" id="telepon" placeholder="Masukkan Nomor Handphone">
      </div>
      <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
      </div>
      <div>
        <label for="status_perkawinan">Status Perkawinan</label>
        <select name="status_perkawinan" id="status_perkawinan">
          <option value="">Pilih Status Perkawinan</option>
          <option value="belum">Belum Kawin</option>
          <option value="sudah">Sudah Kawin</option>
          <option value="pernah">Pernah Kawin</option>
        </select>
      </div>
      <div>
        <label for="tempat_lahir">Kota Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Kota Tempat Lahir">
      </div>
      <div>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
          <option value="">Pilih Jenis Kelamin</option>
          <option value="l">Laki - laki</option>
          <option value="p">Perempuan</option>
        </select>
      </div>
      <div>
        <label for="status_pekerjaan">Status Pekerjaan</label>
        <select name="status_pekerjaan" id="status_pekerjaan">
          <option value="">Pilih Status Pekerjaan</option>
          <option value="pns">PNS</option>
          <option value="tni">TNI</option>
          <option value="polri">POLRI</option>
          <option value="lain">Lainnya</option>
        </select>
      </div>
      <div>
        <label for="provinsi">Provinsi (Sesuai KTP)</label>
        <input type="text" name="provinsi" id="provinsi" placeholder="Masukkan Provinsi">
      </div>
      <div>
        <label for="kabupaten">Kabupaten / Kota (Sesuai KTP)</label>
        <input type="text" name="kabupaten" id="kabupaten">
      </div>
      <div>
        <label for="kecamatan">Kecamatan (Sesuai KTP)</label>
        <input type="text" name="kecamatan" id="kecamatan">
      </div>
      <div>
        <label for="kelurahan">Kelurahan / Desa (Sesuai KTP)</label>
        <input type="text" name="kelurahan" id="kelurahan">
      </div>
      <div>
        <label for="alamat">Alamat Lengkap (Sesuai KTP)</label>
        <input type="text" name="alamat" id="alamat">
      </div>
      <div>
        <label for="rt">RT (Sesuai KTP)</label>
        <input type="text" name="rt" id="rt">
      </div>
      <div>
        <label for="rw">RW</label>
        <input type="text" name="rw" id="rw">
      </div>
      <div>
        <label for="apakah">Apakah alamat yang Anda masukkan di atas sesuai dengan tempat tinggal Anda saat ini?</label>
        <select name="apakah" id="apakah">
          <option value="">Pilih Jawaban</option>
          <option value="ya">Ya</option>
          <option value="tidak">Tidak</option>
        </select>
      </div>
      <div>
        <div>
          <h3>Alamat Domisili</h3>
        </div>
        <div>              
          <div>
            <label for="negara">Asal Negara</label>
            <input type="text" name="negara" id="negara">
          </div>
          <div>
            <label for="provinsi">Provinsi (Domisili)</label>
            <input type="text" name="provinsi" id="provinsi">
          </div>
          <div>
            <label for="kabupaten">Kabupaten / Kota (Domisili)</label>
            <input type="text" name="kabupaten" id="kabupaten">
          </div>
          <div>
            <label for="kecamatan">kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan">
          </div>
          <div>
            <label for="kelurahan">Kelurahan / Desa (Domisili)</label>
            <input type="text" name="kelurahan" id="kelurahan">
          </div>
          <div>
            <label for="alamat">Alamat Lengkap (Domisili)</label>
            <input type="text" name="alamat" id="alamat">
          </div>
          <div>
            <label for="rt">RT (Domisili)</label>
            <input type="text" name="rt" id="rt">
          </div>
          <div>
            <label for="rw">RW (Domisili)</label>
            <input type="text" name="rw" id="rw">
          </div>
        </div>
      </div>
      <div>
        <label for="foto">Foto KTP Diri</label>
        <input type="file" name="foto" id="foto">
      </div>
      <div>
        <input type="checkbox" name="identitas" id="identitas"> Identitas dan dokumen yang saya isi di atas adalah benar dan dapat dipertanggungjawabkan
      </div>
      <div>
        <p>Untuk pertanyaan dan kendala perihal pengisian / pendaftaran anggota, Hubungi Customer Service IT di WA: 0812345678</p>
      </div>
    </div>
    <div>
      <button>Daftar</button>
    </div>
  </div>
</body>
</html>