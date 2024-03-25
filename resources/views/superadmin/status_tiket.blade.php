@extends('superadmin.template.main')

@section('title', 'Data Status Tiket - Helpdesk ITSK')

@section('content')
    <div class="page-content mt-n4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Status Tiket Pengaduan</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table hover stripe">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Status</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Belum Diproses</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Diproses</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Selesai</td>
                                        <td>17</td>
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
