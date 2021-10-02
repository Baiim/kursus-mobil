@extends('layouts.home')
@section('title')
    Home Page | Kursu Mengemudi Mobil
@endsection
@section('content')
            <!-- Hero Start -->
        <section class="bg-half-170 pb-0 bg-primary d-table w-100" style="background: url('images/bg2.png') center center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <h4 class="text-white-50">Kami Professional</h4>
                            <h4 class="heading text-white title-dark">CV. FIKRY JAYA  <br>Kursus mengemudi</h4>
                            <p class="para-desc text-white-50">Temukan kursus mengemudi terbaik disini.</p>
                            <div class="mt-4 pt-2">
                                <a href="{{route('form')}}" class="btn btn-light">Daftar Pelatihan</a>
                                <a href="{{route('harga')}}" class="btn btn-light">Lihat Paket Kursus</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-5 mt-sm-0">
                        <img src="images/bg.png" class="img-fluid" alt="">
                    </div>
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <section class="section">

            <!-- About Start -->
            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                    <div class="card-body p-0">
                                        <img src="images/about/pic-1.jpeg" class="img-fluid" alt="work-image">
                                        <div class="overlay-work bg-dark"></div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6 col-6">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                            <div class="card-body p-0">
                                                <img src="images/about/pic-2.jpeg" class="img-fluid" alt="work-image">
                                                <div class="overlay-work bg-dark"></div>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                        <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                            <div class="card-body p-0">
                                                <img src="images/about/pic-3.jpeg" class="img-fluid" alt="work-image">
                                                <div class="overlay-work bg-dark"></div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                        <div class="ml-lg-4">
                            <div class="section-title mb-4 pb-2">
                                <h4 class="title mb-4">Tentang Kami</h4>
                                <p class="text-muted para-desc">Pada kehidupan sosial masyarakat saat ini, transportasi sudah merupakan salah satu hal yang sangat penting. Bagi sebagian masyarakat atau individu, masalah transportasi seakan sudah menjadi bagian dari kehidupan manusia karena kehidupan manusia juga mempunyai sifat bergerak sebagai mobilitas kegiatan mahkluk sosial.</p>
                                <p class="text-muted para-desc mb-0">Dengan adanya transportasi dan sarana transportasi kita dapat menuju ke berbagai tempat yang akan dituju dengan mudah, itu akan terjadi jika masyarakat dapat menggunakan serta mengembangkan transportasi dan sarananya pula. Namun pada kenyataannya tidak sedikit orang yang hanya memikirkan kepentingan individu. Sehingga masyarakat menggunakan transportasi dan sarana transportasi tanpa memikirkan aktiiltas orang lain atau kepentingan umum. Berlalu lintas yang baik dan benar adalah kewajiban bagi seluruh warga negara tanpa terkecuali demi keselamatan diri pribadi maupun orang lain.
                                </p>
                            </div>

                            <ul class="list-unstyled text-muted">
                                <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Mentor terbaik</li>
                                <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Jaminan cepat bisa mengemudi</li>
                                <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Harga terjangkau</li>
                                <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Fasilitas terbaik</li>
                            </ul>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container">

                <div class="row mt-4 pt-2 position-relative" id="counter" style="z-index: 1;">
                    <div class="col-md-3 col-6 mt-4 pt-2">
                        <div class="counter-box text-center">
                            <img src="images/illustrator/Asset190.svg" class="avatar avatar-small" alt="">
                            <h2 class="mb-0 mt-4"><span class="counter-value" data-count="97">3</span>%</h2>
                            <h6 class="counter-head text-muted">Happy Client</h6>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-md-3 col-6 mt-4 pt-2">
                        <div class="counter-box text-center">
                            <img src="images/illustrator/Asset189.svg" class="avatar avatar-small" alt="">
                            <h2 class="mb-0 mt-4"><span class="counter-value" data-count="15">1</span>+</h2>
                            <h6 class="counter-head text-muted">Awards</h6>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-md-3 col-6 mt-4 pt-2">
                        <div class="counter-box text-center">
                            <img src="images/illustrator/Asset192.svg" class="avatar avatar-small" alt="">
                            <h2 class="mb-0 mt-4"><span class="counter-value" data-count="2">0</span>K</h2>
                            <h6 class="counter-head text-muted">Member</h6>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-md-3 col-6 mt-4 pt-2">
                        <div class="counter-box text-center">
                            <img src="images/illustrator/Asset187.svg" class="avatar avatar-small" alt="">
                            <h2 class="mb-0 mt-4"><span class="counter-value" data-count="98">3</span>%</h2>
                            <h6 class="counter-head text-muted">class Complete</h6>
                        </div><!--end counter box-->
                    </div>
                </div><!--end row-->
                <div class="feature-posts-placeholder bg-light"></div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h6 class="text-primary">Proses Belajar</h6>
                            <h4 class="text-muted para-desc mx-auto mb-0">Mulai kursus dengan 3 Langkah mudah dari kami.</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="card features work-process bg-transparent process-arrow border-0 text-center">
                            <div class="icons rounded h1 text-center text-primary px-3">
                                <i class="uil uil-presentation-edit"></i>
                            </div>

                            <div class="card-body">
                                <h4 class="title text-dark">Pilih paket yang anda mau</h4>
                                <p class="text-muted mb-0">Kami memiliki berbagai paket yang menarik untuk anda</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                        <div class="card features work-process bg-transparent process-arrow border-0 text-center">
                            <div class="icons rounded h1 text-center text-primary px-3">
                                <i class="uil uil-airplay"></i>
                            </div>

                            <div class="card-body">
                                <h4 class="title text-dark">Mulai belajar teori dan prakterk</h4>
                                <p class="text-muted mb-0">Mulai belajar bersama mentor dengan teori dasar dan dilanjutkan dengan praktek</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                        <div class="card features work-process bg-transparent d-none-arrow border-0 text-center">
                            <div class="icons rounded h1 text-center text-primary px-3">
                                <i class="uil uil-image-check"></i>
                            </div>

                            <div class="card-body">
                                <h4 class="title text-dark">Ujian dan sertifikasi</h4>
                                <p class="text-muted mb-0">Setelah proses belajar selanjutnya akan ada test dan selanjutnya sertifikasi</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section-->
@endsection
