@extends('layouts.admin')

@section('content')
<!-- Page Heading -->
<a href="{{ route('pembayaran.index') }}" class="btn btn-warning"><i class="fas fa-fw fa-arrow-circle-left"></i>Back</a>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-3">Ubah Pembayaran</h1>
</div>

<!-- Content Row -->
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('pembayaran.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="anak_id" class="form-label">Anak</label>
                        <select name="anak_id" id="anak_id" class="form-control @error('anak_id') is-invalid @enderror">
                            <option hidden value="">--Pilih Anak--</option>
                            @foreach ($anaks as $anak)
                            <option value="{{ $anak->id }}" @if (old('anak_id', $item->anak_id) == $anak->id) selected
                                @endif>{{ $anak->nama }}</option>
                            @endforeach
                        </select>
                        @error('anak_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenjang" class="form-label">Jenjang Sekolah</label>
                        <select name="jenjang" id="jenjang" class="form-control @error('jenjang') is-invalid @enderror">
                            <option hidden value="">--Pilih Jenjang Sekolah--</option>
                            <option value="Pre School" @if(old('jenjang', $item->jenjang) == 'Pre School') selected @endif>Pre School</option>
                            <option value="Pre Kindy" @if(old('jenjang', $item->jenjang) == 'Pre Kindy') selected @endif>Pre Kindy</option>
                            <option value="Elementary School" @if(old('jenjang', $item->jenjang) == 'Elementary School') selected @endif>Elementary School</option>
                        </select>
                        @error('jenjang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-start">
                            <button type="button" class="btn btn-primary btn-sm mr-2 mb-2" data-toggle="modal"
                                data-target="#modal-gambar">
                                Lihat Bukti Pembayaran
                            </button>
                            <label for="bukti_pembayaran" class="form-label mt-1">Ganti Bukti Pembayaran</label>
                        </div>
                        <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control-file @error('bukti_pembayaran') is-invalid @enderror"
                            placeholder="Masukkan Bukti Pembayaran" value="{{ old('bukti_pembayaran') }}">
                        @error('bukti_pembayaran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-edit">Simpan</button>
                </form>
            </div>
        </div>
        <div class="modal fade" id="modal-gambar" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gambar Bukti pembayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('storage/assets/bukti-pembayaran/' . $item->bukti_pembayaran) }}" alt=""
                            width="1100">
                    </div>
                </div>
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

    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ $message }}'
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
