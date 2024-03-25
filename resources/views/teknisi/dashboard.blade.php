@extends('teknisi.template.main')

@section('title', 'Dashboard Teknisi - Helpdesk ITSK')

@section('content')
    <div class="page-content mt-n4">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin" id="top-content">
            <div>
                <h4 class="mb-3 mb-md-0" id="welcome">Selamat Datang di Halaman Teknisi! <img src="../assets/images/wave.gif" id="hand"></h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap" id="bt-group">
                <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                    <span class="input-group-text input-group-addon bg-transparent border-success"><i
                            data-feather="calendar" class=" text-success"></i></span>
                    <input type="text" class="form-control border-success bg-transparent" id="bt-date">
                </div>
                <button type="button" class="btn btn-success btn-icon-text mb-2 mb-md-0 text-light" id="bt-download">
                    <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                    Download Report
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 col-xl-4">
                <div class="card" id="card1">
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
                <div class="card" id="card2">
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
                <div class="card" id="card3">
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Laporan Pengaduan</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table hover stripe">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>Mahasiswa</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/30</td>
                                        <td><span class="badge bg-danger">Belum Diproses</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Garrett Winters</td>
                                        <td>Mahasiswa</td>
                                        <td>2011/07/25</td>
                                        <td>2011/07/27</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ashton Cox</td>
                                        <td>Mahasiswa</td>
                                        <td>2009/01/12</td>
                                        <td>2009/01/17</td>
                                        <td><span class="badge bg-warning">Proses</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Herry</td>
                                        <td>Dosen</td>
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
            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Status Tiket</h6>
                        <div id="statusTiket"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        #hand {
            width: 35px;
            margin-top: -10px;
        }

        @media only screen and (max-width: 1095px) {
            #bt-group {
                margin-top: 10px;

            }

            #top-content {
                flex-direction: column;
            }
        }

        @media only screen and (max-width: 768px) {
            #bt-group {
                margin-top: 0;
            }

            #card2 {
                margin-top: 10px;
            }

            #card3 {
                margin-top: 10px;
            }
        }

        @media only screen and (max-width: 476px) {
            #bt-group {
                margin-top: 0;
                flex-direction: column;
            }

            #welcome {
                font-size: 17px;
            }

            #bt-download{
                display: block;
                width: 100%;
            }
        }

        @media only screen and (max-width: 423px) {
            #welcome {
                font-size: 15px;
            }

            #hand {
                width: 25px;
            }
        }
    </style>
@endpush
