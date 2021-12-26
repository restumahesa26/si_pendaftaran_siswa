@extends('layouts.home')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ url('frontend/assets/images/course-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Halo Putra Putri Terbaik</h6>
                            <h2>Selamat Datang di Sekolah Highscope Kota Bengkulu</h2>
                            <p>Sekolah internasional pertama di Bengkulu. Let's redesigning the world.</p>
                            <div class="main-button-red">
                                <div><a href="#register">Daftar Sekarang</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src="{{ url('frontend/assets/images/service-icon-01.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Visi</h4>
                                <p>MENJADI PEMIMPIN YANG INOVATIF DI DUNIA DAN MENJADI BAROMETER PENDIDIKAN DI INDONESIA
                                    <br><br>SH memiliki visi untuk menjadi pemimpin yang inovatif di dunia di bidang
                                    pendidikan dan menjadi
                                    barometer pendidikan Indonesia. Untuk itu, SHI menggabungkan nilai-nilai terbaik
                                    dari filosofi nasional dan
                                    dunia internasional dalam mengembangkan kurikulumnya.</br>
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ url('frontend/assets/images/service-icon-02.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Misi</h4>
                                <p>UNTUK MEMBANTU ANAK-ANAK INDONESIA BERKEMBANG SECARA TOTAL - AKADEMIK,
                                    INTRAPERSONAL, INTERPERSONAL DAN SECARA FISIK - DAN MENJADI KOMPETITIF DI DUNIA
                                    INTERNASIONAL
                                    <br><br>Misi SH adalah untuk menyediakan program pendidikan sekolah dasar yang
                                    berkualitas tinggi bagi para
                                    siswanya. SHI secara konsisten melakukan penelitian dan pengembangan.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ url('frontend/assets/images/service-icon-03.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Nilai Inti</h4>
                                <p>Core values merupakan prinsip-prinsip yang mendasari setiap usaha dan perbuatan yang
                                    kami kerjakan
                                    untuk mencapai visi dan misi. HighScope Indonesia memiliki empat core values:
                                    <br><br>1. Respect (Hormat)
                                    <br>2. Responsibility (Tanggung Jawab)
                                    <br>3. Excellence (Keunggulan)
                                    <br>4. Integrity (Integritas)
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ url('frontend/assets/images/service-icon-02.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Kurikulum</h4>
                                <p>Didasarkan pendekatan perkembangan kognitif yang merupakan titik berat pendekatan
                                    pendidikan yang diusung oleh berbagai pakar pendidikan, seperti Jean Piaget
                                    (psikolog dan filsuf dari Swiss),
                                    John Dewey (filsuf di bidang sosial dan pendidikan dari Amerika Serikat), dan David
                                    Weikart (Pendiri
                                    HighScope Foundation di Amerika Serikat). Guru wajib berinteraksi dengan siswa untuk
                                    memfasilitasi dan membimbing.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ url('frontend/assets/images/service-icon-03.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Relasi</h4>
                                <p>Berasal dari Amerika Serikat dan menyebar ke seluruh dunia, HighScope Indonesia
                                    memberikan perhatian khusus pada anak.
                                    <br><br>Dengan awal yang sederhana di AS, HighScope telah menjadi terkenal di
                                    beberapa negara: Indonesia, Irlandia, Meksiko, Belanda, Inggris, Portugal, Kanada,
                                    China, Chili, Peru,Afrika Selatan, Korea.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Berita</h4>
                        <ul>
                            <li><a href="#">Ayo lihat keseruan kegiatan di Sekolah Highscope.</a></li>
                            <li><a href="#">Berita diambil berdasarkan waktu terbaru.</a></li>
                            <li><a href="#">Jangan sampai ketinggalan.</a></li>
                            <li><a href="#">Let's redesigning the world!</a></li>
                            <li><a href="#">Bersama Sekolah Highscope Kota Bengkulu.</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="meetings.html">Lihat Berita</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>Kegiatan</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Pameran Musik.jpg') }}" alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Dec<span>14</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Pameran Musik</h4>
                                    </a>
                                    <p>Sekolah HighScope Indonesia Bengkulu presents Musical Exhibition for Elementary
                                        Students who joined in Extended Enrichment Music coach by mr. Bima Ambara, S.Sn
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>Peresmian</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Peresmian.jpg') }}" alt="Online Teaching"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Sept<span>25</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Peresmian</h4>
                                    </a>
                                    <p>Tanggal 25 September 2021 Sekolah HighScope Indonesia Bengkulu diresmikan oleh
                                        Bapak Walikota Bengkulu Bapak H. Helmi Hasan S.E dan Bapak Wakil Walikota
                                        Bengkulu Bapak Dr Dedy Wahyudi S.E MM. Acara grand opening dihadiri CEO dan
                                        Founder dari sekolah HighScope Indonesia Ibu Antarina SF Amir cucu dari pelopor
                                        pendidikan di Indonesia Bapak Ki Hajar Dewantara.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>Konferensi</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Open Day.jpg') }}" alt="Higher Education"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Sept<span>8</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Konferensi Nasional</h4>
                                    </a>
                                    <p>Start your child’s education with us! 90% of a child’s brain development happens
                                        before age 5. It is the Golden Age, when most brain functions, such as
                                        memorization, cognition, observation, and emotion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>Hari Besar</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="{{ url('frontend/assets/images/Hari Anak.jpg') }}" alt="Student Training"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>July<span>23</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Hari Anak Nasional</h4>
                                    </a>
                                    <p>Sekolah HighScope Indonesia memberikan yang terbaik bagi anak Indonesia dengan
                                        memberikan pengalaman belajar yang membentuk resiliensi, membangun kreatifitas,
                                        dan kemampuan berpikir secara kritis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="register-now" id="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>PENDAFTARAN SISWA BARU PRESCHOOL</h3>
                                <p>Seorang anak diterima di prescool jika ia mencapai usia 30 bulan (2 tahun 6 bulan)
                                    pada tanggal 31 Juli tahun ajaran itu.</p>
                                <div class="main-button-red">
                                    <a href="{{ route('dashboard') }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>PENDAFTARAN SISWA BARU PRE KINDY</h3>
                                <p>Seorang anak telah mencapai usia 4 (empat) tahun sebelum tanggal 1 November tahun
                                    ajaran di mana siswa tersebut ingin didaftarkan.</p>
                                <div class="main-button-yellow">
                                    <a href="{{ route('dashboard') }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>PENDAFTARAN SISWA BARU SEKOLAH DASAR</h3>
                                <p>Seorang anak harus mencapai usia 5 (lima) tahun sebelum tanggal 1 November tahun
                                    ajaran dimana siswa tersebut ingin didaftarkan.</p>
                                <div class="main-button-red">
                                    <a href="{{ route('dashboard') }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Apa itu Preschool, Pre Kindy, dan Elementary School?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>
                                        Preschool adalah PAUD (Pendidikan Anak Usia Dini)
                                        <br>Pre Kindy adalah TK (Taman Kanak-Kanak)
                                        <br>Elementary School adalah SD (Sekolah Dasar)
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Bahasa apa yang digunakan dalam program Anak Usia Dini HighScope?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Bahasa yang digunakan dalam program PAUD adalah bahasa Inggris. Guru memiliki
                                        strategi khusus untuk berkomunikasi dengan anak yang belum terbiasa dengan
                                        bahasa Inggris, misalnya dengan menggunakan materi dan ungkapan yang lebih
                                        konkrit tanpa perlu menerjemahkan ke dalam bahasa ibu anak.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Kegiatan apa yang dilakukan anak saya di sekolah?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Kegiatan sehari-hari siswa Early Childhood Program (Preschool dan Pre Kindy)
                                        dirancang sebagai rangkaian Rutinitas Harian. Rutinitas sehari-hari ini
                                        dirancang untuk mengakomodir berbagai kebutuhan siswa, mulai dari kebutuhan
                                        motorik, sosial emosional, literasi, hingga kebutuhan esensial siswa
                                        “non-akademik”, seperti snack time. Berikut isi rutinitas harian di HighScope:
                                        <br><br>Greeting Time
                                        <br>Story Time
                                        <br>Outside Time
                                        <br>Large Group time
                                        <br>Small Group Time
                                        <br>Snack Time
                                        <br>Planning Time
                                        <br>Work Time
                                        <br>Clean Up Time
                                        <br><br>Kegiatan dalam Rutinitas Harian dilaksanakan setiap hari pada waktu yang
                                        sama. Urutannya didesain sedemikian rupa untuk menyeimbangkan aktivitas yang
                                        membutuhkan banyak gerakan fisik dan aktivitas yang lebih melunak.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Apa Perbedaan Pendekatan Highscope?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Pendekatan pendidikan HighScope konsisten dengan praktik terbaik yang
                                        direkomendasikan oleh National Association for the Education of Young Children
                                        (NAEYC), Head Start Program Performance Standards, dan pedoman lain untuk
                                        program berbasis perkembangan.
                                        Namun, dalam kerangka yang luas ini, HighScope memiliki fitur unik yang
                                        membedakannya dari program anak usia dini lainnya. Salah satunya adalah urutan
                                        rencana-lakukan-review harian. Penelitian menunjukkan bahwa perencanaan dan
                                        peninjauan adalah dua komponen program yang paling positif dan signifikan
                                        terkait dengan skor anak-anak pada ukuran kemajuan perkembangan.
                                        Fitur unik kedua adalah konten kurikulum kami, blok bangunan sosial,
                                        intelektual, dan fisik yang penting untuk pertumbuhan optimal anak kecil. Area
                                        konten kami diatur ke dalam delapan kategori utama yang sesuai dengan standar
                                        pembelajaran negara bagian dan nasional: (1) Pendekatan Pembelajaran, (2)
                                        Perkembangan Sosial dan Emosional, (3) Perkembangan Fisik dan Kesehatan, (4)
                                        Bahasa, Keaksaraan, dan Komunikasi , (5) Matematika, (6) Seni Kreatif, (7) Sains
                                        dan Teknologi, dan (8) IPS.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Fakta Sekolah Highscope Kota Bengkulu</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">94</div>
                                        <div class="count-title">Succesed Students</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">43</div>
                                        <div class="count-title">Current Teachers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">60</div>
                                        <div class="count-title">New Students</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">32</div>
                                        <div class="count-title">Awards</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=IStK3LJb7PI" target="_blank"><img
                                src="assets/images/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Tentang Kami</h2>
                                </div>
                                <div class="col-lg-6">
                                    <p>Berasal dari Amerika Serikat dan menyebar ke seluruh dunia, HighScope
                                        Indonesia memberikan perhatian khusus pada anak; itu tidak hanya berfokus
                                        pada perkembangan otak tetapi juga menekankan pembangunan karakter. Dengan
                                        tim ahli pendidikan yang berpengalaman, HighScope menerapkan kurikulum
                                        berkualitas tinggi. Kami adalah "Jembatan Menuju Kehidupan Nyata", didirikan
                                        dengan tujuan untuk mempersiapkan anak-anak untuk masa depan mereka.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <p>Dengan awal yang sederhana di AS, HighScope telah menjadi terkenal di
                                            beberapa negara: Indonesia, Irlandia, Meksiko, Belanda, Inggris,
                                            Portugal, Kanada, Cina, Chili, Peru, Afrika Selatan, dan Korea.</p>
                                        </p>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Phone Number</h6>
                            <span>0823 88888 572</span>
                        </li>
                        <li>
                            <h6>Street Address</h6>
                            <span>Kapuas Raya St. Number 205, Padang Harapan</span>
                        </li>
                        <li>
                            <h6>Website URL</h6>
                            <span>www.highscopebengkulu.id</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>©Copyright ©2021. HighScope Bengkulu. All rights reserved.</p>
    </div>
</section>
@endsection
