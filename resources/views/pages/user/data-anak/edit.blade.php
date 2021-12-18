@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <a href="{{ route('data-anak.index') }}" class="btn btn-warning"><i class="fas fa-fw fa-arrow-circle-left"></i>Back</a>
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Ubah Data Anak {{ $item->nama }}</h1>
    </div>

    <!-- Content Row -->
    <div class="row justify-content-center mb-5">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('data-anak.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ $item->nama }}">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan Tempat Lahir" value="{{ $item->tempat_lahir }}">
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="Masukkan Tanggal Lahir" value="{{ $item->tanggal_lahir }}">
                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="L" @if ($item->jenis_kelamin === 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if ($item->jenis_kelamin === 'P') selected @endif>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="agama" class="form-label">Agama</label>
                                    <input type="text" name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror" placeholder="Masukkan Agama" value="{{ $item->agama }}">
                                    @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan_darah" class="form-label">Golongan Darah</label>
                            <select name="golongan_darah" id="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror">
                                <option value="">--Pilih Golongan Darah--</option>
                                <option value="A" @if ($item->golongan_darah === 'A') selected @endif>A</option>
                                <option value="B" @if ($item->golongan_darah === 'B') selected @endif>B</option>
                                <option value="AB" @if ($item->golongan_darah === 'AB') selected @endif>AB</option>
                                <option value="O" @if ($item->golongan_darah === 'O') selected @endif>O</option>
                            </select>
                            @error('golongan_darah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ $item->alamat }}">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama_wali" class="form-label">Nama Wali</label>
                                    <input type="text" name="nama_wali" id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Masukkan Nama Wali" value="{{ $item->nama_wali }}">
                                    @error('nama_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror" placeholder="Masukkan Pekerjaan Wali" value="{{ $item->pekerjaan_wali }}">
                                    @error('pekerjaan_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="alamat_wali" class="form-label">Alamat Wali</label>
                                    <input type="text" name="alamat_wali" id="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" placeholder="Masukkan Alamat Wali" value="{{ $item->alamat_wali }}">
                                    @error('alamat_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="hubungan_dengan_wali" class="form-label">Hubungan Dengan Wali</label>
                                    <input type="text" name="hubungan_dengan_wali" id="hubungan_dengan_wali" class="form-control @error('hubungan_dengan_wali') is-invalid @enderror" placeholder="Masukkan Hubungan Dengan Wali" value="{{ $item->hubungan_dengan_wali }}">
                                    @error('hubungan_dengan_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-edit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="{{ url('js/sweetalert2.all.min.js') }}"></script>

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Perhatikan Lagi Field Yang Diisi'
            })
        </script>
    @endif

    <script>
        $('.btn-edit').on('click', function (e) {
            e.preventDefault(); // prevent form submit
            var form = event.target.form;
            Swal.fire({
            title: 'Yakin Menyimpan Perubahan?',
            text: "Data Akan Tersimpan",
            icon: 'warning',
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }else {
                    //
                }
            });
        });
    </script>
@endpush
