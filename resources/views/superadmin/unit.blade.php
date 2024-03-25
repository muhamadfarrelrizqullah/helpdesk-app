@extends('superadmin.template.main')

@section('title', 'Data Unit - Helpdesk ITSK')

@section('content')
    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="card-title m-0">Data Unit Kerja</h6>
                            <div>
                                <button type="button" id="bt-tambah" class="btn btn-success btn-sm btn-icon-text"><i class="link-icon" data-feather="plus-square"></i> Tambah Data</button>
                                <button type="button" class="btn btn-danger btn-sm btn-icon-text"><i class="link-icon" data-feather="x-square"></i> Hapus Data</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table hover stripe">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="form-check-input check-all"></th>
                                        <th>Nama Unit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Teknis</td>
                                        <td><button type="button" class="btn btn-primary btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> </button>
                                            <button type="button" class="btn btn-secondary btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Administratif</td>
                                        <td><button type="button" class="btn btn-primary btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> </button>
                                            <button type="button" class="btn btn-secondary btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> </button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input check"></td>
                                        <td>Akademis</td>
                                        <td><button type="button" class="btn btn-primary btn-sm btn-icon-text"><i class="link-icon" data-feather="eye"></i> </button>
                                            <button type="button" class="btn btn-secondary btn-sm btn-icon-text"><i class="link-icon" data-feather="edit"></i> </button></td>
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

@push('style')
<style>
    .btn-primary{
        margin-right: 10px
    }
    .link-icon{
        max-width: 20px;
    }
    #bt-tambah{
        margin-right: 10px
    }
</style>
@endpush
