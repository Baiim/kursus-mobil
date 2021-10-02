@extends('layouts.home')
@section('title')
    Pengumuman Kelulusan | Kursus Mengemudi
@endsection
@section('content')
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Pengumuman Kelulusan CV. FIKRY JAYA </h4>
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
                        <h4 class="title mb-4">Pengumuman Kelulusan CV. FIKRY JAYA</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Berikut ini Pengumuman Kelulusan <span class="text-primary font-weight-bold">CV. FIKRY JAYA</span></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div>

            <div class="row align-items-center">
                <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
</div>
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
@push('js')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                { data: 'name', name: 'name' },
                { data: 'status', name: 'status' },
            ]
        });
    </script>
@endpush
