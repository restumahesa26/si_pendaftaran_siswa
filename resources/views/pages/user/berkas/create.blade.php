@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upload Berkas</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('berkas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pembayaran_id" class="form-label">Anak</label>
                            <select name="pembayaran_id" id="pembayaran_id" class="form-control">
                                <option value="">--Pilih Transaksi Pembayaran--</option>
                                @foreach ($pembayaran as $item)
                                    <option value="{{ $item->id }}" @if (old('pembayaran_id') === $item->id) selected @endif>{{ $item->anak->nama }} - {{ $item->jenjang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ktp_ortu" class="form-label">Scan KTP</label>
                            <input type="file" name="ktp_ortu" id="ktp_ortu" class="form-control" placeholder="Masukkan Scan KTP">
                        </div>
                        <div class="form-group">
                            <label for="kk" class="form-label">Scan Kartu Keluarga</label>
                            <input type="file" name="kk" id="kk" class="form-control" placeholder="Masukkan Scan Kartu Keluarga">
                        </div>
                        <div class="form-group">
                            <label for="akta_kelahiran" class="form-label">Scan Akta Kelahiran</label>
                            <input type="file" name="akta_kelahiran" id="akta_kelahiran" class="form-control" placeholder="Masukkan Scan Akta Kelahiran">
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
@endpush
