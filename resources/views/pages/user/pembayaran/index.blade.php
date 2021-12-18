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
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Jenjang</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Pesan</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->anak->nama }}</td>
                                    <td>{{ $item->jenjang }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-gambar{{ $item->id }}">
                                            Lihat Bukti Tranfer
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
                                    <td class="text-center">
                                        @if ($item->status == 0)
                                            <a href="{{ route('pembayaran.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            <form action="{{ route('pembayaran.destroy', $item->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-hapus">Hapus</button>
                                            </form>
                                        @else
                                            -
                                        @endif
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
            @foreach ($items as $item2)
            <div class="modal fade" id="modal-gambar{{ $item2->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Gambar Bukti pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="{{ asset('storage/assets/bukti-pembayaran/' . $item2->bukti_pembayaran) }}" alt="" width="1100">
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="{{ url('js/sweetalert2.all.min.js') }}"></script>

    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ $message }}'
        })
    </script>
    @endif

    <script>
        $('.btn-hapus').on('click', function (e) {
            e.preventDefault(); // prevent form submit
            var form = event.target.form;
            Swal.fire({
            title: 'Yakin Menghapus Data?',
            text: "Data Akan Terhapus Permanen",
            icon: 'warning',
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
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
