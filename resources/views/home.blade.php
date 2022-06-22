@extends('layouts.main')
@section('body_content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Tentang Loker PeTIK</h5>
                                <p>Sistem Informasi Lowongan Kerja (PeTIK) merupakan situs informasi
                                    lowongan kerja khusus untuk
                                    mahasantri Pesantren Teknologi Informasi dan Komunikasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card-columns">
                            <div class="card">
                                <img class="card-img-top"
                                    src="https://asset.kompas.com/crops/ba-1ApZbckOA6L9mEl2Y4TGJ0Is=/0x0:1000x667/750x500/data/photo/2018/05/03/2787267532.JPG">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a class="text-dark" href="berita-1.html">
                                            Tips Fresh Graduate Mencari Kerja Di Tengah Pandemi
                                        </a>
                                    </h4>
                                    <p class="card-text">Baru saja para mahasiswa yang baru lulus atau
                                        fresh graduate di tengah
                                        pandemi menjadi trending dengan tagar #wisudaldr2020. Tagar ini ...
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top"
                                    src="https://image.freepik.com/free-photo/muslim-girl-graduation-ceremony_21730-5822.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a class="text-dark" href="berita-2.html"> Menentukan Langkah
                                            Setelah Lulus Kuliah</a>
                                    </h4>
                                    <p class="card-text">Beberapa pilihan yang biasa bagi mereka yang
                                        baru lulus kuliah adalah
                                        kerja, menikah, atau bahkan ada yang memilih untuk menganggur ...
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top"
                                    src="https://image.freepik.com/free-photo/executives-are-interviewing-candidates-focusing-resume-writing-tips-applicant-qualifications-interview-skills-pre-interview-preparation-considerations-new-employees_112699-189.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a class="text-dark" href="berita-3.html">Ingin Melamar Kerja?
                                            Simak Dulu Cara Membuat
                                            Portofolio Kerja</a>
                                    </h4>
                                    <p class="card-text">Bagi kamu yang saat ini akan memasuki dunia
                                        kerja, sudah sejauh apanih
                                        persiapan karier yang kamu punya?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body submenu">
                        <h5 class="mb-3">Berita Terbaru</h5>
                        <ul class="submenu-item list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-1.html">Tips Fresh Graduate
                                    Mencari Kerja Di
                                    Tengah Pandemi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-2.html">Menentukan Langkah
                                    Setelah Lulus
                                    Kuliah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-3.html">Ingin Melamar Kerja?
                                    Simak Dulu Cara
                                    Membuat Portofolio Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-4.html">Catat, Ini 8 Dokumen
                                    yang Wajib Disiapkan
                                    Saat Cari Kerja!</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var token = '<?php echo $token ?>'
    </script>
    <script src="{{ asset('js/home.js') }}"></script>
    <!-- content-wrapper ends -->
@endsection
