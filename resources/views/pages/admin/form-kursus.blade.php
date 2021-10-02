@extends('layouts.admin')
@section('title') Data Pendaftar Kursus Mengemudi | HIMATIF - UPB
@endsection
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  {{--
  <p class="mb-4">
    DataTables is a third party plugin that is used to generate the demo table
    below. For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net"
      >official DataTables documentation</a
    >.
  </p>
  --}}

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="row mt-4">
        <div class="col-lg mb-lg mb-4">
          <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <div class="card-header pb-0">
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                          <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <table class="table align-items-center mb-0" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Whatsapp</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Pekerjaan</th>
                                        <th>Paket Kursus</th>
                                        <th>Alamat</th>
                                        <th>Foto KTP</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </table>
                          </div>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
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
                { data: 'email', name: 'email' },
                { data: 'wa', name: 'wa' },
                { data: 'ttl', name: 'ttl' },
                { data: 'job', name: 'job' },
                { data: 'paket', name: 'paket' },
                { data: 'alamat', name: 'alamat' },
                { data: 'ktp', name: 'ktp' },
                    {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush
