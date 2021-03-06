@extends('layouts.home')
@section('title')
    Kontak Kami | Kursus Mengemudi
@endsection
@section('content')
            <!-- Start Contact -->
            <section class="section pt-5 mt-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="card map border-0">
                                <div class="card-body p-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->

                <div class="container mt-100 mt-60">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                            <div class="card custom-form rounded shadow border-0">
                                <div class="card-body">
                                    <div id="message"></div>
                                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group position-relative">
                                                    <label>Your Name <span class="text-danger">*</span></label>
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Comments</label>
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                                <div id="simple-msg"></div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div>
                            </div><!--end custom-form-->
                        </div><!--end col-->

                        <div class="col-lg-7 col-md-6 order-1 order-md-2">
                            <div class="title-heading ml-lg-4">
                                <h4 class="mb-4">Kontak kami</h4>
                                <div class="media contact-detail align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="mail" class="fea icon-m-md text-dark mr-3"></i>
                                    </div>
                                    <div class="media-body content">
                                        <h4 class="title font-weight-bold mb-0">Email</h4>
                                        <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                                    </div>
                                </div>

                                <div class="media contact-detail align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="phone" class="fea icon-m-md text-dark mr-3"></i>
                                    </div>
                                    <div class="media-body content">
                                        <h4 class="title font-weight-bold mb-0">Phone</h4>
                                        <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                                    </div>
                                </div>

                                <div class="media contact-detail align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="map-pin" class="fea icon-m-md text-dark mr-3"></i>
                                    </div>
                                    <div class="media-body content">
                                        <h4 class="title font-weight-bold mb-0">Location</h4>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="video-play-icon text-primary">View on Google map</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section-->
            <!-- End contact -->
            <section class="section pt-0">
                <div class="container">

                    <div class="row mt-4 pt-2 position-relative" id="counter" style="z-index: 1;">
                    </div><!--end row-->
                    <div class="feature-posts-placeholder bg-light"></div>
                </div><!--end container-->
            </section><!--end section-->
@endsection
