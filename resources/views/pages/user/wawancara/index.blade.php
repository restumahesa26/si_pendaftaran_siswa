@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jadwal Wawancara</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        @forelse ($items as $item)
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h5>Nama Anak</h5>
                            <h5>Jenjang</h5>
                            <h5>Jadwal</h5>
                        </div>
                        <div class="col-8">
                            <h5>{{ $item->anak->nama }}</h5>
                            <h5>{{ $item->pembayaran->jenjang }}</h5>
                            <h5 style="font-weight: bold;">{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('l, d F Y') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
@endsection

@push('addon-script')
    <script src="{{ url('js/sweetalert2.all.min.js') }}"></script>

    @if ($items->count() >= 1)
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Perhatian',
            text: 'Silahkan Lakukan Wawancara Sesuai Jadwal'
        })
    </script>
    @else
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Perhatian',
            text: 'Belum Terdapat Jadwal Wawancara'
        })
    </script>
    @endif
@endpush
