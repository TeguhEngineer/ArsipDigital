@extends('index')
<title>Arsip Digital - Laporan</title>
@section('content')
    {{-- Judul --}}
    <div class="pagetitle">
        <h1 class="fw-bold"><i class="bi bi-house-door-fill"></i> Laporan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Cetak Laporan Surat Masuk dan Keluar Berdasarkan Tanggal</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-4 my-1">
            <label for="tanggalawal"></label>
            <input type="date" id="tanggalawal" name="" class="form-control">
        </div>
        <div class="col-lg-4 my-1">
            <label for="tanggalawal"></label>
            <input type="date" id="tanggalawal" name="" class="form-control">
        </div>
        <div class="col-lg-4 my-1">
            <button class="btn btn-info text-white form-control">Konfirmasi</button>
        </div>
    </div>

    <div class="border-bottom border-dark my-3 "></div>

    {{-- Surat Masuk --}}
    <div class="pagetitle mt-4">
        <h1 class="fw-bold text-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-envelope-arrow-down" viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99V4Zm1 7.105 4.708-2.897L1 5.383v5.722ZM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1Z" />
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708l-1.25 1.25Z" />
            </svg> Surat Masuk
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Catatan surat masuk</li>
            </ol>
        </nav>
    </div>

    <div class="table-responsive" style="margin-top: -10px">
        <table class="table table-bordered">
            <thead class="table-secondary text-center">
                <th width="50px">No.</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
            </thead>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        </table>
    </div>

    {{-- Surat Keluar --}}
    <div class="pagetitle mt-3">
        <h1 class="fw-bold text-danger">
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-envelope-arrow-up" viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99V4Zm1 7.105 4.708-2.897L1 5.383v5.722ZM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1Z" />
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016Z" />
            </svg> Surat Keluar
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Catatan surat keluar</li>
            </ol>
        </nav>
    </div>

    <div class="table-responsive" style="margin-top: -10px">
        <table class="table table-bordered">
            <thead class="table-secondary text-center">
                <th width="50px">No.</th>
                <th>Tanggal</th>
                <th>Penerima</th>
                <th>Perihal</th>
            </thead>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        </table>
    </div>

    <div class="border-bottom border-dark my-3 "></div>

    <div>
        <button class="btn btn-outline-primary form-control">Cetak Laporan</button>
    </div>
@endsection
