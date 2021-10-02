@extends('layouts.home')
@section('title')
    Daftar Harga | Kursus Mengemudi
@endsection
@section('content')
        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Daftar Harga Paket </h4>
                            <div class="page-next">
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
            <!-- Price Start -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title mb-4 pb-2">
                                <h4 class="title mb-4">Paket Kursus</h4>
                                <p class="text-muted para-desc mb-0 mx-auto">Berikut ini Paket & Program Kursus Sekolah Mengemudi <span class="text-primary font-weight-bold">CV. FIKRY JAYA </span></p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row align-items-center">
                        <div class="col-md-4 col-12 mt-4 pt-2">
                            <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                                <div class="card-body py-5">
                                    <h2 class="title text-uppercase mb-4">Regular</h2>

                                    <ul class="list-unstyled mb-0 pl-0">
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Memperlancar</li>
                                        <p>
                                            Diperuntukan bagi siswa yang telah menguasai dasar mengemudi tetapi belum begitu lancar baik scara teknis maupun mental
                                        </p>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Dasar</li>
                                        <p>
                                            Diperuntukan bagi siswa yang belum sama sekali menguasai mengemudi
                                        </p>                                    </ul>
                                    <a href="{{route('form')}}" class="btn btn-primary mt-4">Daftar sekarang</a>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4 col-12 mt-4 pt-2">
                            <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                                <div class="card-body py-5">
                                    <h2 class="title text-uppercase text-primary mb-4">Khusus</h2>

                                    <ul class="list-unstyled mb-0 pl-0">
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Paket Parkir</li>
                                        <p>
                                            Program lebih difokuskan pada kemahiran teknik parkir                                        </p>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Paket Tanjakan</li>
                                        <p>
                                            Program lebih difokuskan pada kemahiran teknik tanjakan                                        </p>
                                        <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Paket Mobil Automatic</li>
                                        <p>
                                            Program belajar dengan mobil Automatic terkini                                        </p>
                                    </ul>
                                    <a href="{{route('form')}}" class="btn btn-primary mt-4">Daftar sekarang</a>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4 col-12 mt-4 pt-2">
                            <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                                <div class="card-body py-5">
                                    <h2 class="title text-uppercase mb-4">VIP</h2>

                                    <ul class="list-unstyled mb-0 pl-0">
                                        <p>
                                            Program Paket Belajar VIP lebih diperuntukkan bagi Anda yang mobile dan super sibuk sehingga tidak memiliki waktu untuk datang ke outlet-outlet kami. Anda latina kami JEMPUT sekaligus bisa DIANTAR ke tempat tujuan yang diinginkan. Mengambil belajar Paket VIP ini, Anda sudah: <br>
                                            <b>“HEMAT WAKTU – HEMAT BIAYA TRANSPORTASI DAN SERASA BELAJAR PAKAI MOBIL SENDIRI”</b>
                                        </p>
                                    </ul>
                                    <a href="{{route('form')}}" class="btn btn-primary mt-4">Daftar sekarang</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->


                <!-- Testi Start -->
                <div class="container mt-100 mt-60">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title mb-4 pb-2">
                                <h4 class="title mb-4">Testimonial</h4>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row justify-content-center">
                        <div class="col-lg-12 mt-4">
                            <div id="customer-testi" class="owl-carousel owl-theme">
                                <div class="media customer-testi m-2">
                                    <img src="images/testi/2.jpeg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Mentornya ramah-ramah "</p>
                                        <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                    </div>
                                </div>

                                <div class="media customer-testi m-2">
                                    <img src="images/testi/4.jpeg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Akhirnya saya bisa mengemudi dengan baik "</p>
                                        <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                    </div>
                                </div>

                                <div class="media customer-testi m-2">
                                    <img src="images/testi/3.jpeg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Awalnya sempet ragu , tapi setelah mencoba sendiri saya sangat puas. "</p>
                                        <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                    </div>
                                </div>

                                <div class="media customer-testi m-2">
                                    <img src="images/testi/1.jpeg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Belajar mengemudi dengan cara yang menyenangkan "</p>
                                        <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section-->
            <!-- Testi End -->
                    <!-- Start -->
        <section class="section pt-0">
            <div class="container">

                <div class="row mt-4 pt-2 position-relative" id="counter" style="z-index: 1;">
                </div><!--end row-->
                <div class="feature-posts-placeholder bg-light"></div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
@endsection
