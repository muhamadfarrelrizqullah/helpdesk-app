@extends('teknisi.template.main')

@section('title', 'Data Aduan Belum Proses - Helpdesk ITSK')

@section('content')
<div class="page-content mt-n4">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Halaman Data Aduan Belum Diproses</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
              <span class="input-group-text input-group-addon bg-transparent border-success"><i data-feather="calendar" class=" text-success"></i></span>
              <input type="text" class="form-control border-success bg-transparent">
            </div>
            <button type="button" class="btn btn-success btn-icon-text mb-2 mb-md-0 text-light">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Download Report
            </button>
          </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Aduan Belum Diproses</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table hover stripe">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Posisi</th>
                                    <th>Kategori Masalah</th>
                                    <th>Permasalahan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggapan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Nixie</td>
                                    <td>Mahasiswa</td>
                                    <td>Akademis</td>
                                    <td>Wifi Lemot</td>
                                    <td>2011/04/25</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">Kerjakan</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Michelle Winters</td>
                                    <td>Mahasiswa</td>
                                    <td>Akademis</td>
                                    <td>Wifi Lemot</td>
                                    <td>2011/07/25</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">Kerjakan</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cox Victoria</td>
                                    <td>Mahasiswa</td>
                                    <td>Akademis</td>
                                    <td>Tidak bisa mengajukan KRS</td>
                                    <td>2009/01/12</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">Kerjakan</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
