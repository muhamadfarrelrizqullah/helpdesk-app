@extends('superadmin.template.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Selamat Datang di Halaman Super Admin</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
              <span class="input-group-text input-group-addon bg-transparent border-warning"><i data-feather="calendar" class=" text-warning"></i></span>
              <input type="text" class="form-control border-warning bg-transparent">
            </div>
            <button type="button" class="btn btn-warning btn-icon-text mb-2 mb-md-0 text-light">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Download Report
            </button>
          </div>
    </div>

    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="pb-2">20</h1>
                            <div class="pb-2"> <i data-feather="x-square"></i> Belum Diproses </div>
                        </div>
                        <span data-peity='{"fill": ["rgb(251,188,6)"],"height": 50, "width": 80 }'
                            class="peity-bar">5,3,9,6,5,9,7,3,5,2</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="pb-2">7</h1>
                            <div class="pb-2"> <i data-feather="activity"></i> Sedang Diproses </div>
                        </div>
                        <span data-peity='{"fill": ["rgb(251,188,6)"],"height": 50, "width": 80 }'
                            class="peity-bar">5,3,9,6,5,9,7,3,5,2</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="pb-2">120</h1>
                            <div class="pb-2"> <i data-feather="check"></i> Selesai </div>
                        </div>
                        <span
                            data-peity='{"stroke": ["rgb(251,188,6)"], "fill": ["rgba(251,188,6, .2)"],"height": 50, "width": 80 }'
                            class="peity-line">5,3,9,6,5,9,7,3,5,2</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                            <h6 class="card-title mb-0">Trafic Laporan</h6>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span
                                            class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="trash" class="icon-sm me-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="printer" class="icon-sm me-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="download" class="icon-sm me-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col-md-7">
                                <p class="text-muted tx-13 mb-3 mb-md-0">Aktivitas laporan dalam bulanan yang dilakukan oleh
                                    pengguna.</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-md-end">
                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning">Hari</button>
                                    <button type="button" class="btn btn-outline-warning d-none d-md-block">Minggu</button>
                                    <button type="button" class="btn btn-warning text-light">Bulan</button>
                                    <button type="button" class="btn btn-outline-warning">Tahun</button>
                                </div>
                            </div>
                        </div>
                        <div id="revenueChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Status Tiket</h6>
                        <div id="statusTiket"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Kategori Laporan</h6>
                        <div id="kategoriLaporan"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Donut chart</h6>
                        <div id="urgensiLaporan"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Laporan Pengaduan</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>Fakultas</th>
                                        <th>Semester</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>NIM</th>
                                        <th>Unit Kerja</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>6</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td>123456789</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>6</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td>987654321</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>6</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td>456123788</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>John Nixie</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>6</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td>123456789</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>6</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td>987654321</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Cox Victoria</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>6</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td>456123788</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Kimberly Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>6</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td>123456789</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Gabriel Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>6</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td>987654321</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Marley Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>6</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td>456123788</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Bella Nixon</td>
                                        <td>System Arciitect</td>
                                        <td>Edinburgh</td>
                                        <td>6</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td>123456789</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Jonathan Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>6</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td>987654321</td>
                                        <td>---</td>
                                        <td>---</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Dev</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>6</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td>456123788</td>
                                        <td>---</td>
                                        <td>---</td>
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
