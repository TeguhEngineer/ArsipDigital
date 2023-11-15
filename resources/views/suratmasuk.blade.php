@extends('index')
<title>Arsip Digital - Surat Masuk</title>
@section('content')
    <div class="row">

        {{-- Judul --}}
        <div class="col-lg-7">
            <div class="pagetitle">
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
        </div>

        <!-- pencarian -->
        <div class="col-lg-5">
            <form action="{{ url()->current() }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control input" name="cari" placeholder="Cari Data"
                        autocomplete="off" value="{{ request('cari') }}">
                    <button class="btn btn-success text-white input px-3"><svg xmlns="http://www.w3.org/2000/svg"
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
                                @foreach ($perihal as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $data->perihal }}</td>
                                        <td class="text-center"><i class="bi bi-trash3-fill btn btn-danger"></i></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <button class="btn btn-info text-white form-control">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Surat Masuk --}}
    <div class="modal fade" id="SuratMasuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel"><i class="bi bi-plus-lg"></i> Surat Masuk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/suratmasuk" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal"
                            class="form-control mb-2 @error('tanggal') is-invalid @enderror" autocomplete="off">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" name="pengirim" id="pengirim"
                            class="form-control mb-2 @error('pengirim') is-invalid @enderror" autocomplete="off">
                        <label for="perihal">Perihal</label>
                        <select name="perihal_id" id="perihal"
                            class="form-select mb-2 @error('perihal_id') is-invalid @enderror">
                            @foreach ($perihal as $item)
                                <option disabled selected hidden>- pilih perihal -</option>
                                <option value="{{ $item->id }}">{{ $item->perihal }}</option>
                            @endforeach
                        </select>
                        <label for="file">File</label>
                        <input type="file" name="file[]" id="file"
                            class="form-control mb-4 @error('file') is-invalid @enderror" autocomplete="off"
                            multiple="">
                        <button type="submit" class="btn btn-info text-white form-control">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- Button Input --}}
    <div class="mb-3 btn-center-mobile">
        <button class="btn btn-success text-white col-lg-3 col-sm-6" data-bs-toggle="modal"
            data-bs-target="#InputPerihal"><i class="bi bi-plus-lg"></i> Input Perihal</button>
        <button class="btn btn-success text-white col-lg-3 col-sm-6" data-bs-toggle="modal"
            data-bs-target="#SuratMasuk"><i class="bi bi-plus-lg"></i> Surat Masuk</button>
    </div>


    <div class="row">
        {{-- <div class="col-sm-12 col-lg-4">

            Tabel Perihal
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-secondary text-center">
                        <th width="50px">No.</th>
                        <th width="150px">Perihal Surat</th>
                        <th width="150px">Detail</th>
                    </thead>
                    @foreach ($perihal as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $item->perihal }}</td>
                            <td class="text-center">
                                <i class="bi bi-pencil-square btn btn-warning"></i> &nbsp;
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div> --}}
        <div class="col-12">

            {{-- Tabel Surat Masuk --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-secondary text-center">
                        <th width="50px">No.</th>
                        <th width="150px">Tanggal</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th width="150px">Detail</th>
                    </thead>
                    @foreach ($suratmasuk as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $data->tanggal }}</td>
                            <td>{{ $data->pengirim }}</td>
                            <td>{{ $data->perihal->perihal }}</td>
                            <td class="d-flex">

                                <a href="/suratmasuk/{{ $data->id }}" class="btn btn-success text-white""
                                    ><i class="bi bi-download"></i></a>

                                {{-- <div class="modal fade" id="download{{ $data->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-bold" id="exampleModalLabel"><i
                                                        class="bi bi-plus-lg"></i> Input Perihal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @include('includeSuratMasuk')
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- @if ($data->filemasuk->file)
                                    <a href="{{ asset('file_suratmasuk' . $data->filemasuk->file) }}"
                                        class="btn btn-success text-white" download><i class="bi bi-download"></i></a>
                                @else
                                    <span class="text-danger">No File Available</span>
                                @endif --}}

                                <button class="btn btn-info text-white mx-1"><i class="bi bi-eye"></i></button>

                                <button class="btn btn-danger text-white"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
