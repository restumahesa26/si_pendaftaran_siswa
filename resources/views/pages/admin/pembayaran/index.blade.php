@extends('layouts.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-nowrap" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Orang Tua</th>
                                <th>Nama Anak</th>
                                <th>Bukti Pembayaran</th>
                                <th>Pesan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->anak->nama }}</td>
                                <td>{{ $item->orang_tua->user->nama }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal-gambar{{ $item->id }}">
                                        Lihat Gambar
                                    </button>
                                </td>
                                <td class="text-primary" style="font-weight: bold">
                                    @if ($item->pesan)
                                        {{ $item->pesan }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status === 0)
                                    <span class="badge badge-danger">Belum Dikonfirmasi</span>
                                    @else
                                    <span class="badge badge-success">Sudah Dikonfirmasi</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status === 0)
                                    <a href="{{ route('admin-pembayaran.konfirmasi-pembayaran', $item->id) }}"
                                        class="btn btn-sm btn-info">Konfirmasi Pembayaran</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modal-batal{{ $item->id }}">
                                        Batal Pembayaran
                                    </button>
                                    @else
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modal-batal{{ $item->id }}">
                                        Batal Pembayaran
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="6">Data Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @foreach ($items as $item2)
        <div class="modal fade" id="modal-gambar{{ $item2->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                        <img src="{{ asset('storage/assets/bukti-pembayaran/' . $item2->bukti_pembayaran) }}" alt=""
                            width="1100">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-batal{{ $item2->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Batalkan Pembayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <form action="{{ route('admin-pembayaran.batal-pembayaran', $item2->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <input type="text" class="form-control" id="pesan" placeholder="Masukkan Pesan" name="pesan">
                            </div>
                            <button type="submit" class="btn btn-danger">Batal Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endpush
