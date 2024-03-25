@extends('admin.template.main')

@section('title', 'Data Aduan Karyawan - Helpdesk ITSK')

@section('content')
    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Laporan Pengaduan Karyawan</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table hover stripe">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Telp</th>
                                        <th>NIK</th>
                                        <th>Unit  Kerja</th>
                                        <th>Teknisi</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kimberly Nixon</td>
                                        <td>kimbernixw@mail.com</td>
                                        <td>081234567899</td>
                                        <td>678909</td>
                                        <td>Administrasi</td>
                                        <td>Heru Kahn</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Gabriel Winters</td>
                                        <td>gabw2014@mail.com</td>
                                        <td>081234567899</td>
                                        <td>112256</td>
                                        <td>Administrasi</td>
                                        <td>Dev</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Marley Cox</td>
                                        <td>marleycc@mail.com</td>
                                        <td>081234567899</td>
                                        <td>787656</td>
                                        <td>Keuangan</td>
                                        <td>Marco</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
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