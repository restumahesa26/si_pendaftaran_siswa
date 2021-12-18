@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <a href="{{ route('pembayaran.index') }}" class="btn btn-warning"><i class="fas fa-fw fa-arrow-circle-left"></i>Back</a>
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Tambah Pembayaran</h1>
    </div>

    <!-- Content Row -->
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="anak_id" class="form-label">Anak</label>
                            <select name="anak_id" id="anak_id" class="form-control @error('anak_id') is-invalid @enderror" required>
                                <option hidden value="">--Pilih Anak--</option>
                                @foreach ($anaks as $anak)
                                    <option value="{{ $anak->id }}" @if (old('anak_id') == $anak->id) selected @endif>{{ $anak->nama }}</option>
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
                                <option value="Pre School" @if (old('jenjang') == 'Pre School') selected @endif>Pre School</option>
                                <option value="Pre Kindy" @if (old('jenjang') == 'Pre Kindy') selected @endif>Pre Kindy</option>
                                <option value="Elementary School" @if (old('jenjang') == 'Elementary School') selected @endif>Elementary School</option>
                            </select>
                            @error('jenjang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control-file @error('bukti_pembayaran') is-invalid @enderror" placeholder="Masukkan Bukti Pembayaran" value="{{ old('bukti_pembayaran') }}">
                            @error('bukti_pembayaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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

    @if ($message = Session::get('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '{{ $message }}'
        })
    </script>
    @endif
@endpush
