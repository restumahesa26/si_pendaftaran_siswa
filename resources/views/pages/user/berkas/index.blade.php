@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berkas</h1>
        <a href="{{ route('berkas.create') }}" class="btn btn-sm btn-primary">Tambah Berkas</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Jenjang</th>
                                    <th>KTP</th>
                                    <th>KK</th>
                                    <th>Akta</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Pesan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->anak->nama }}</td>
                                    <td>{{ $item->pembayaran->jenjang }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-ktp{{ $item->id }}">
                                            Lihat KTP
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-kk{{ $item->id }}">
                                            Lihat KK
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-akta{{ $item->id }}">
                                            Lihat Akta
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-bukti{{ $item->id }}">
                                            Lihat Bukti
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
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="9">Data Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @foreach ($items as $item)
            <div class="modal fade" id="modal-bukti{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="{{ asset('storage/assets/bukti-pembayaran/' . $item->pembayaran->bukti_pembayaran) }}" alt=""
                                width="1100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-ktp{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gambar Scan KTP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('storage/assets/scan-ktp-ortu/' . $item->ktp_ortu) }}" alt=""
                                width="1100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-kk{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gambar Scan Kartu Keluarga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('storage/assets/scan-kk/' . $item->kk) }}" alt=""
                                width="1100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-akta{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gambar Scan Akta Kelahiran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('storage/assets/scan-akta-kelahiran/' . $item->akta_kelahiran) }}" alt=""
                                width="1100">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
