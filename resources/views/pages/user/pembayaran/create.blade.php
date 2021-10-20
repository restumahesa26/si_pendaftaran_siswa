@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pembayaran</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="anak_id" class="form-label">Anak</label>
                            <select name="anak_id" id="anak_id" class="form-control">
                                <option value="">--Pilih Anak--</option>
                                @foreach ($anaks as $anak)
                                    <option value="{{ $anak->id }}" @if (old('anak_id') === $anak->id) selected @endif>{{ $anak->nama }} - {{ $anak->jenjang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" placeholder="Masukkan Bukti Pembayaran" value="{{ old('bukti_pembayaran') }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
