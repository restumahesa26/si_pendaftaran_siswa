@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        @if (Auth::user()->role == 'ADMIN')
                    <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Orang Tua</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $orangTua }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pembayaran Belum Diverifikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pembayaran }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Berkas Belum Diverifikasi
                            </div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $berkas }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Wawancara</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $berkas2 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Selamat Datang, {{ Auth::user()->nama }}</h2>
                        <div class="d-flex-justify-content-start mt-3">
                            <a href="{{ route('wawancara.index') }}" class="btn btn-primary mr-3">Lihat Jadwal Wawancara</a>
                            <a href="{{ route('pembayaran.index') }}" class="btn btn-primary mr-3">Lihat Pembayaran</a>
                            <a href="{{ route('berkas.index') }}" class="btn btn-primary">Lihat Berkas</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
