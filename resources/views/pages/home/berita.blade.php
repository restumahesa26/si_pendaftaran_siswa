@extends('layouts.home')

@section('content')
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Simak Berita Terbaru dari Sekolah Highscope Kota Bengkulu<h6>
                        <h2>Berita</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filters">
                            <ul>
                                <li data-filter="*" class="active">Semua Berita</li>
                                <li data-filter=".soon">Segera</li>
                                <li data-filter=".imp">Info Penting</li>
                                <li data-filter=".att">Atraktif</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row grid">
                            <div class="col-lg-4 templatemo-item-col all soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <a href="meeting-details.html"><img
                                                src="{{ url('frontend/assets/images/Pendaftaran (1 Januari).jpg') }}" alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Jan<span>1</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Pendaftaran</h4>
                                        </a>
                                        <p>Segera daftarkan Putra Putri Bapak Ibu di SPK atau sekolah internasional
                                            pertama di Kota Bengkulu tahun ajaran 2022/2023 dengan 20 fasilitas
                                            penunjang.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <a href="meeting-details.html"><img
                                                src="{{ url('frontend/assets/images/Pameran Musik (14 Des).jpg') }}" alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Des<span>14</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Pameran Musik</h4>
                                        </a>
                                        <p>Sekolah HighScope Indonesia Bengkulu presents Musical Exhibition for
                                            Elementary Students who joined in Extended Enrichment Music coach by mr.
                                            Bima Ambara, S.Sn</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Peresmian (25 Sept).jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Sept<span>25</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Peresmian</h4>
                                        </a>
                                        <p>Start your child’s education with us! 90% of a child’s brain development
                                            happens before age 5. It is the Golden Age, when most brain functions, such
                                            as memorization, cognition, observation, and emotion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all soon imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Open Day (8 Sept).jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Sept<span>8</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Open Day</h4>
                                        </a>
                                        <p>Start your child’s education with us! 90% of a child’s brain development
                                            happens before age 5. It is the Golden Age, when most brain functions, such
                                            as memorization, cognition, observation, and emotion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Hari Anak (23 Juli).jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Juli<span>23</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Hari Anak Nasional</h4>
                                        </a>
                                        <p>
                                            Sekolah HighScope Indonesia memberikan yang terbaik bagi anak Indonesia
                                            dengan memberikan pengalaman belajar yang membentuk resiliensi, membangun
                                            kreatifitas, dan kemampuan berpikir secara kritis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>©Copyright ©2021. HighScope Bengkulu. All rights reserved.</p>
    </div>
</section>
@endsection
