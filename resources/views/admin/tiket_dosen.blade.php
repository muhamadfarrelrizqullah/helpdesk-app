@extends('admin.template.main')

@section('title', 'Data Aduan Dosen')

@section('content')
    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Laporan Pengaduan Dosen</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Telp</th>
                                        <th>NIP</th>
                                        <th>Prodi</th>
                                        <th>Teknisi</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Nixie</td>
                                        <td>johnix@mail.com</td>
                                        <td>081234567899</td>
                                        <td>123456789</td>
                                        <td>System Architect</td>
                                        <td>Adrian</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Michelle Winters</td>
                                        <td>chellw@mail.com</td>
                                        <td>081234567899</td>
                                        <td>987654321</td>
                                        <td>Accountant</td>
                                        <td>Adrian</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Cox Victoria</td>
                                        <td>victoriacox@mail.com</td>
                                        <td>081234567899</td>
                                        <td>456123788</td>
                                        <td>Junior Technical Author</td>
                                        <td>John</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
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