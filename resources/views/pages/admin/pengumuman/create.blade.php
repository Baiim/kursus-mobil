@extends('layouts.admin')
@section('title')
    Create
@endsection
@section('content')
<div class="container">
            <div class="card custom-form border-0">
                <div class="card-body">
                    <form action="{{ route('pengumuman.store') }}" method="post" enctype="multipart/form-data" class="rounded shadow p-4">
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
                                <div class="form-group">
                                    <label>Pilih Status<span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" name="status" id="Sortbylist-Shop" required>
                                        <option>Lulus</option>
                                        <option>Tidak Lulus</option>
                                        <option>Lulus dengan catatan</option>
                                    </select>
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
@endsection
