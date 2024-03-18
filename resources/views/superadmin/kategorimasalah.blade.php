@extends('superadmin.template.main')

@section('title', 'Data Kategori Masalah')

@section('content')
    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="card-title m-0">Data Kategori Masalah</h6>
                            <div>
                                <button type="button" class="btn btn-success btn-sm btn-icon-text"><i class="link-icon" data-feather="plus-square"></i> Tambah Data</button>
                                <button type="button" class="btn btn-danger btn-sm btn-icon-text"><i class="link-icon" data-feather="x-square"></i> Hapus Data</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="form-check-input check-all"></th>
                                        <th>Nama Kategori</th>
                                        <th>Unit Kerja</th>
                                        <th>Jumlah</th>
                                        <th></th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Teknis</td>
                                        <td>Teknis</td>
                                        <td>11</td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Administratif</td>
                                        <td>Administratif</td>
                                        <td>8</td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Akademis</td>
                                        <td>Akademis</td>
                                        <td>3</td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Fasilitas Kampus</td>
                                        <td>Teknisi</td>
                                        <td>8</td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Keamanan</td>
                                        <td>Teknisi</td>
                                        <td>4</td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Lingkungan</td>
                                        <td>Teknisi</td>
                                        <td>2</td>
                                        <td><button type="button" class="btn btn-outline-info btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> Lihat </button></td>
                                        <td><button type="button" class="btn btn-outline-success btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> Ubah </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Sarana Prasarana</td>
                                        <td>Teknisi</td>
                                        <td>12</td>
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
