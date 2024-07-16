@extends('layout.main')

@section('title')
    <title>Portal - One Page All Links</title>
@endsection

@section('content')
    <section id="awal" class="hero section">

        <img src="assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-out">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Web Portal <br /> BPS Kabupaten Demak</h1>
                    <p>Kumpulan Link Terkait Kegiatan dan Pekerjaan BPS Kabupaten Demak</p>
                </div>
            </div>
            <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
                <a href="/admin" class="btn-get-started">Go to Admin</a>
            </div>

            <div class="row gy-4 mt-5">
                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon">
                            <a href="https://webapps.bps.go.id/kipapp/" target="blank">
                                <i class="bi bi-calendar2-week"></i>
                            </a>
                        </div>
                        <h4 class="title"><a href="https://webapps.bps.go.id/kipapp/" target="blank">CKP Bulanan</a></h4>
                        <p class="description">Untuk Upload CKP Bulanan</p>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon">
                            <a target="_blank"
                                href="https://docs.google.com/spreadsheets/d/1RX333VVQEtkPb5icQV8ksfPaL1sS3rtQ/edit?usp=drive_web&ouid=109499362573116470072&rtpof=true">
                                <i class="bi bi-journal-text">
                                </i>
                            </a>
                        </div>
                        <h4 class="title"><a target="_blank"
                                href="https://docs.google.com/spreadsheets/d/1RX333VVQEtkPb5icQV8ksfPaL1sS3rtQ/edit?usp=drive_web&ouid=109499362573116470072&rtpof=true">Agenda
                                Surat</a></h4>
                        <p class="description">Untuk permintaan nomor surat dan agenda</p>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon">
                            <a href="https://s.bps.go.id/ckp3321" target="blank">
                                <i class="bi bi-person-badge-fill"></i>
                            </a>
                        </div>
                        <h4 class="title"><a href="https://s.bps.go.id/ckp3321" target="blank">CKP Bulanan</a></h4>
                        <p class="description">Untuk Upload CKP Bulanan</p>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon">
                            <a href="#home"><i class="bi bi-list-task"></i></a>
                        </div>
                        <h4 class="title"><a href="#home">Surat Tugas</a></h4>
                        <p class="description">Untuk Permintaan dan pembuatan surat tugas [Coming soon]</p>
                    </div>
                </div><!--End Icon Box -->

            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="kepala" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kepala</h2>
            <p>Daftar link kepala BPS Demak</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($kepala as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        style="padding: 10px">
                        <div class="team-member">
                            <div class="member-img image-wrapper">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid square-image" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Link Umum -->
                @endforeach
            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Umum Section -->
    <section id="umum" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Umum</h2>
            <p>Kumpulan link pada tim umum</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($umum as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        style="padding: 10px">
                        <div class="team-member">
                            <div class="member-img image-wrapper">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid square-image" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Link Umum -->
                @endforeach
            </div>

        </div>

    </section><!-- /Umum Section2 -->

    <!-- Sosial Section -->
    <section id="sosial" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sosial</h2>
            <p>Kumpulan link pada tim sosial</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($sosial as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Link Sosial -->
                @endforeach

            </div>

        </div>

    </section><!-- /Social Section -->

    <!-- Produksi Section -->
    <section id="produksi" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Produksi</h2>
            <p>Kumpulan link pada tim produksi</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($produksi as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        style="padding: 10px">
                        <div class="team-member">
                            <div class="member-img image-wrapper">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid square-image"
                                        alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach


            </div>

        </div>

    </section><!-- /Produksi Section -->

    <!-- Distribusi Section -->
    <section id="distribusi" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Distribusi</h2>
            <p>Kumpulan link pada tim distribusi</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($distribusi as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Link Sosial -->
                @endforeach

            </div>

        </div>

    </section><!-- Distribusi Section -->

    <!-- Nerwilis Section -->
    <section id="nerwilis" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Nerwilis</h2>
            <p>Kumpulan link pada tim nerwilis</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($nerwilis as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        style="padding: 10px">
                        <div class="team-member">
                            <div class="member-img image-wrapper">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid square-image"
                                        alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach


            </div>

        </div>

    </section><!-- /Nerwilis Section -->

    <!-- IPDS Section -->
    <section id="ipds" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>IPDS</h2>
            <p>Kumpulan link pada tim IPDS</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($ipds as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Link Sosial -->
                @endforeach

            </div>

        </div>

    </section><!-- IPDS Section -->

    <!-- RB Section -->
    <section id="rb" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>RB</h2>
            <p>Kumpulan link pada tim RB</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($rb as $key)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        style="padding: 10px">
                        <div class="team-member">
                            <div class="member-img image-wrapper">
                                <a href="{{ $key->url }}" target="_blank">
                                    <img src="storage/{{ $key->image }}" class="img-fluid square-image"
                                        alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="{{ $key->url }}" target="_blank">
                                    <h4>{{ $key->title }}</h4>
                                </a>
                                <a href="{{ $key->url }}" target="_blank">
                                    <span>{{ $key->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach


            </div>

        </div>

    </section><!-- /RB Section -->
@endsection
