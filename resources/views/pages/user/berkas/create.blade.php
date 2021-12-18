@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <a href="{{ route('berkas.index') }}" class="btn btn-warning"><i class="fas fa-fw fa-arrow-circle-left"></i>Back</a>
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Upload Berkas</h1>
    </div>

    <!-- Content Row -->
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('berkas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pembayaran_id" class="form-label">Transaksi Pembayaran</label>
                            <select name="pembayaran_id" id="pembayaran_id" class="form-control @error('pembayaran_id') is-invalid @enderror" required>
                                <option hidden value="">--Pilih Transaksi Pembayaran--</option>
                                @foreach ($pembayaran as $item)
                                    <option value="{{ $item->id }}" @if (old('pembayaran_id') == $item->id) selected @endif>{{ $item->anak->nama }} - {{ $item->jenjang }}</option>
                                @endforeach
                            </select>
                            @error('pembayaran_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ktp_ortu" class="form-label">Scan KTP</label>
                            <input type="file" name="ktp_ortu" id="ktp_ortu" class="form-control-file @error('ktp_ortu') is-invalid @enderror" placeholder="Masukkan Scan KTP">
                            @error('ktp_ortu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kk" class="form-label">Scan Kartu Keluarga</label>
                            <input type="file" name="kk" id="kk" class="form-control-file @error('kk') is-invalid @enderror" placeholder="Masukkan Scan Kartu Keluarga">
                            @error('kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="akta_kelahiran" class="form-label">Scan Akta Kelahiran</label>
                            <input type="file" name="akta_kelahiran" id="akta_kelahiran" class="form-control-file @error('akta_kelahiran') is-invalid @enderror" placeholder="Masukkan Scan Akta Kelahiran">
                            @error('akta_kelahiran')
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
