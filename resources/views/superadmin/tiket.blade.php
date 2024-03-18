@extends('superadmin.template.main')

@section('title', 'Data Tiket')

@section('content')
    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="card-title m-0">Data Tiket Pengaduan</h6>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text"><i class="link-icon" data-feather="x-square"></i> Hapus Data</button>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="form-check-input check-all"></th>
                                        <th>Permasalahan</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Kategori Masalah</th>
                                        <th>Status</th>
                                        <th>Urgensi</th>
                                        <th></th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Jaringan wifi lemah</td>
                                        <td>2011/04/25</td>
                                        <td>Teknis</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                        <td><span class="badge bg-success">Rendah</span></td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Tidak bisa mengajukan KRS</td>
                                        <td>2011/04/27</td>
                                        <td>Akademis</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                        <td><span class="badge bg-warning">Sedang</span></td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Jaringan wifi lag</td>
                                        <td>2011/04/28</td>
                                        <td>Teknis</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                        <td><span class="badge bg-success">Rendah</span></td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>AC mati</td>
                                        <td>2011/04/29</td>
                                        <td>Teknis</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                        <td><span class="badge bg-danger">Tinggi</span></td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    const checkAllCheckbox = document.querySelector('.check-all');
    const checkboxes = document.querySelectorAll('.check');

    checkAllCheckbox.addEventListener('change', function () {
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = checkAllCheckbox.checked;
        });
    });
</script>
@endpush
