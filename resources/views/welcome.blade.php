<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'parte') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/1.jpg') }}" type="image/x-icon">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <style type="text/css">
      html, body {
          margin: 0;
      }
      #brand {
        background: url({{ asset('assets/1.jpg') }});
        background-size: cover;
        opacity: 0.3;
        position: fixed;
        top: 0;
        width: 50%;
        bottom: 0;
        left: 0;
      }
  </style>
  </head>
  <body>
    <div id="brand"></div>
    <section>
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <form action="#">
                <h3>e-Form Pendaftaran Anggota ....</h3>
                <div class="mb-3">
                  <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                  <input type="text" name="nik" id="nik" class="form-control rounded-0" placeholder="Masukkan NIK...">
                </div>
                <div class="mb-3">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control rounded-0" placeholder="Masukkan Nama Lengkap...">
                </div>
                <div class="mb-3">
                  <label for="telepon">Nomor Handphone</label>
                  <input type="text" name="telepon" id="telepon" class="form-control rounded-0" placeholder="Masukkan Nomor Handphone...">
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control rounded-0">
                </div>
                <div class="mb-3">
                  <label for="status_perkawinan">Status Perkawinan</label>
                  <select name="status_perkawinan" id="status_perkawinan" class="form-control rounded-0">
                    <option value="">-- Pilih Status Perkawinan --</option>
                    <option value="belum">Belum Kawin</option>
                    <option value="sudah">Sudah Kawin</option>
                    <option value="pernah">Pernah Kawin</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="tempat_lahir">Kota Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="gender">Jenis Kelamin</label>
                  <select name="gender" id="gender" class="form-control rounded-0">
                    <option value="">-- Pilih Jenis Kelamain --</option>
                    <option value="l">Laki - Laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="status_pekerjaan">Status Pekerjaan</label>
                  <select name="status_pekerjaan" id="status_pekerjaan" class="form-control rounded-0">
                    <option value="">-- Pilih Status Pekerjaan --</option>
                    <option value="pns">PNS</option>
                    <option value="tni">TNI</option>
                    <option value="polri">POLRI</option>
                    <option value="lain">Lain-lain</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="provinsi">Provinsi (Sesuai KTP)</label>
                  <input type="text" name="provinsi" id="provinsi" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="kabupaten">Kabupaten/Kota (Sesuai KTP)</label>
                  <input type="text" name="kabupaten" id="kabupaten" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="kecamatan">Kecamatan (Sesuai KTP)</label>
                  <input type="text" name="kecamatan" id="kecamatan" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="desa">Kelurahan/Desa (Sesuai KTP)</label>
                  <input type="text" name="desa" id="desa" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="alamat">Alamat Lengkap (Sesuai KTP)</label>
                  <input type="text" name="alamat" id="alamat" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="rt">RT (Sesuai KTP)</label>
                  <input type="text" name="rt" id="rt" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="rw">RW (Sesuai KTP)</label>
                  <input type="text" name="rw" id="rw" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <label for="tempat_lahir">Foto KTP Diri</label>
                  <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control rounded-0" placeholder="Masukkan Kota Tempat Lahir...">
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary rounded-0">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- js --}}
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.js') }}"></script>
  </body>
</html>
