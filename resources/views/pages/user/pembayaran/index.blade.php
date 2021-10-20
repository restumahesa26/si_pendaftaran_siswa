@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
        <a href="{{ route('pembayaran.create') }}" class="btn btn-sm btn-primary">Tambah Pembayaran</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->anak->nama }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-gambar{{ $item->id }}">
                                            Lihat Gambar
                                        </button>
                                    </td>
                                    <td>
                                        @if ($item->status === 0)
                                            <span class="text-warning">Belum Dikonfirmasi</span>
                                        @else
                                            <span class="text-success">Sudah Dikonfirmasi</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('pembayaran.delete', $item->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">Data Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @foreach ($items as $item)
            <div class="modal fade" id="modal-gambar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Gambar Bukti pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="{{ asset('storage/assets/bukti-pembayaran/' . $item->bukti_pembayaran) }}" alt="" width="1100">
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection
