@extends('pages.home')
@section('title')
    Form Pendaftaran | Kursus Mengemudi
@endsection
@section('content')
            <!-- Job apply form Start -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-7">
                            <div class="card custom-form border-0">
                                <div class="card-body">
                                    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" class="rounded shadow p-4">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>Nama Lengkap<span class="text-danger">*</span></label>
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control pl-5" placeholder="Nama Lengkap Sesuai KTP" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>Email<span class="text-danger">*</span></label>
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Email Anda" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>No. Whatsapp<span class="text-danger">*</span></label>
                                                    <i data-feather="phone" class="fea icon-sm icons"></i>
                                                    <input name="wa" id="number" type="number" class="form-control pl-5" placeholder="Nomor Whatsapp Aktif" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="ttl" type="date" id="subject" class="form-control pl-5" placeholder="Pekerjaan Anda Saat Ini" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>Pekerjaan<span class="text-danger">*</span></label>
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="job" id="subject" class="form-control pl-5" placeholder="Pekerjaan Anda Saat Ini" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Pilih Paket Kursus<span class="text-danger">*</span></label>
                                                    <select class="form-control custom-select" name="paket" id="Sortbylist-Shop" required>
                                                        <option>Paket Reguler</option>
                                                        <option>Paket Khusus</option>
                                                        <option>Paket VIP</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Alamat<span class="text-danger">*</span></label>
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea name="alamat" id="comments" rows="4" class="form-control pl-5" placeholder="Alamat Lengkap Anda" required></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Upload Kartu Identitas<span class="text-danger">*</span></label>
                                                    <input type="file" name="ktp" class="form-control-file" id="fileupload" required>
                                                </div>
                                            </div><!--end col-->
                                            {{-- <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                        <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                    </div>
                                                </div>
                                            </div><!--end col--> --}}
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Daftar Sekarang">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div>
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div>
                <!--end container-->
            </section><!--end section-->
            <!-- Job apply form End -->
            <section class="section pt-0">
                <div class="container">

                    <div class="row mt-4 pt-2 position-relative" id="counter" style="z-index: 1;">
                    </div><!--end row-->
                    <div class="feature-posts-placeholder bg-light"></div>
                </div><!--end container-->
            </section><!--end section-->
@endsection
