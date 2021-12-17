@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Anak {{ $item->nama }}</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('data-anak.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $item->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{ $item->tempat_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{ $item->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="L" @if ($item->jenis_kelamin === 'L') selected @endif>Laki-Laki</option>
                                <option value="P" @if ($item->jenis_kelamin === 'P') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="form-label">Agama</label>
                            <input type="text" name="agama" id="agama" class="form-control" placeholder="Masukkan Agama" value="{{ $item->agama }}">
                        </div>
                        <div class="form-group">
                            <label for="golongan_darah" class="form-label">Golongan Darah</label>
                            <select name="golongan_darah" id="golongan_darah" class="form-control">
                                <option value="">--Pilih Golongan Darah--</option>
                                <option value="A" @if ($item->golongan_darah === 'A') selected @endif>A</option>
                                <option value="B" @if ($item->golongan_darah === 'B') selected @endif>B</option>
                                <option value="AB" @if ($item->golongan_darah === 'AB') selected @endif>AB</option>
                                <option value="O" @if ($item->golongan_darah === 'O') selected @endif>O</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ $item->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_wali" class="form-label">Nama Wali</label>
                            <input type="text" name="nama_wali" id="nama_wali" class="form-control" placeholder="Masukkan Nama Wali" value="{{ $item->nama_wali }}">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                            <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control" placeholder="Masukkan Pekerjaan Wali" value="{{ $item->pekerjaan_wali }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_wali" class="form-label">Alamat Wali</label>
                            <input type="text" name="alamat_wali" id="alamat_wali" class="form-control" placeholder="Masukkan Alamat Wali" value="{{ $item->alamat_wali }}">
                        </div>
                        <div class="form-group">
                            <label for="hubungan_dengan_wali" class="form-label">Hubungan Dengan Wali</label>
                            <input type="text" name="hubungan_dengan_wali" id="hubungan_dengan_wali" class="form-control" placeholder="Masukkan Hubungan Dengan Wali" value="{{ $item->hubungan_dengan_wali }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
