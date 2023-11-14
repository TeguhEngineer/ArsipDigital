@extends('index')
<title>Arsip Digital - Surat Keluar</title>
@section('content')
    <div class="row">

        {{-- Judul --}}
        <div class="col-lg-7">
            <div class="pagetitle">
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
        </div>

        <!-- pencarian -->
        <div class="col-lg-5">
            <form action="{{ url()->current() }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control input" name="cari" placeholder="Cari Data"
                        autocomplete="off" value="{{ request('cari') }}">
                    <button class="btn btn-danger text-white input px-3"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Input Perihal --}}
    <div class="modal fade" id="InputPerihal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel"><i class="bi bi-plus-lg"></i> Input Perihal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/perihal" method="POST">
                        @csrf
                        <label for="namaperihal">Nama Perihal</label>
                        <input type="text" name="perihal" id="namaperihal"
                            class="form-control mb-3 @error('perihal') is-invalid @enderror" autocomplete="off">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-secondary text-center">
                                    <th width="50px">No.</th>
                                    <th>Nama Perihal</th>
                                    <th width="100px">Hapus</th>
                                </thead>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                {{-- @foreach ($perihal as $data) 
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $data->perihal }}</td>
                                    <td>-</td>
                                </tr>
                                @endforeach --}}
                            </table>
                        </div>
                        <button class="btn btn-info text-white form-control">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Surat Masuk --}}
    <div class="modal fade" id="SuratKeluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel"><i class="bi bi-plus-lg"></i> Surat Keluar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="" id="tanggal" class="form-control mb-2" autocomplete="off">
                        <label for="pengirim">Penerima</label>
                        <input type="text" name="" id="pengirim" class="form-control mb-2" autocomplete="off">
                        <label for="perihal">Perihal</label>
                        <select name="" id="perihal" class="form-select mb-4">
                            <option disabled selected hidden>- pilih perihal -</option>
                            <option value="">-</option>
                            <option value="">-</option>
                        </select>
                        <button class="btn btn-info text-white form-control">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Button Input --}}
    <div class="mb-3 btn-center-mobile">
        <button class="btn btn-danger text-white col-lg-3 col-md-3" data-bs-toggle="modal"
            data-bs-target="#InputPerihal"><i class="bi bi-plus-lg"></i> Input Perihal</button>
        <button class="btn btn-danger text-white col-lg-3 col-md-3" data-bs-toggle="modal"
            data-bs-target="#SuratKeluar"><i class="bi bi-plus-lg"></i> Surat Keluar</button>
    </div>

    {{-- Tabel Surat Keluar --}}
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-secondary text-center">
                <th width="50px">No.</th>
                <th>Tanggal</th>
                <th>Penerima</th>
                <th>Perihal</th>
                <th>Detail</th>
            </thead>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        </table>
    </div>
@endsection
