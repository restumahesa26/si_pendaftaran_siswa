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
                    <form action="{{ route('berkas.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="pembayaran_id" class="form-label">Anak</label>
                            <select name="pembayaran_id" id="pembayaran_id" class="form-control">
                                <option hidden value="">--Pilih Transaksi Pembayaran--</option>
                                @foreach ($pembayaran as $item2)
                                    <option value="{{ $item2->id }}" @if (old('pembayaran_id', $item->pembayaran_id) === $item2->id) selected @endif>{{ $item2->anak->nama }} - {{ $item2->jenjang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-start">
                                <button type="button" class="btn btn-primary btn-sm mr-2 mb-2" data-toggle="modal" data-target="#modal-ktp">
                                    Lihat KTP
                                </button>
                                <label for="ktp_ortu" class="form-label mt-1">Scan KTP</label>
                            </div>
                            <input type="file" name="ktp_ortu" id="ktp_ortu" class="form-control" placeholder="Masukkan Scan KTP">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-start">
                                <button type="button" class="btn btn-primary btn-sm mr-2 mb-2" data-toggle="modal" data-target="#modal-kk">
                                    Lihat KK
                                </button>
                                <label for="kk" class="form-label mt-1">Scan Kartu Keluarga</label>
                            </div>
                            <input type="file" name="kk" id="kk" class="form-control" placeholder="Masukkan Scan Kartu Keluarga">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-start">
                                <button type="button" class="btn btn-primary btn-sm mr-2 mb-2" data-toggle="modal" data-target="#modal-akta">
                                    Lihat Akta
                                </button>
                                <label for="akta_kelahiran" class="form-label mt-1">Scan Akta Kelahiran</label>
                            </div>
                            <input type="file" name="akta_kelahiran" id="akta_kelahiran" class="form-control" placeholder="Masukkan Scan Akta Kelahiran">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-edit">Simpan</button>
                    </form>
                </div>
                <div class="modal fade" id="modal-ktp" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                <div class="modal fade" id="modal-kk" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                <div class="modal fade" id="modal-akta" tabindex="-1" aria-labelledby="exampleModalLabel"
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
