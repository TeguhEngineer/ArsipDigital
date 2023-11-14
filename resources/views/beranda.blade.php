@extends('index')
<title>Arsip Digital - Beranda</title>
@section('content')
    {{-- Judul --}}
    <div class="pagetitle">
        <h1 class="fw-bold"><i class="bi bi-house-door-fill"></i> Beranda</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Jumlah Surat Masuk dan Surat Keluar</li>
            </ol>
        </nav>
    </div>

    {{-- Carousel --}}
    <section class="section dashboard">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius: 15px">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/background.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/background.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/background.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row mt-4">
            {{-- Card Surat Masuk --}}
            <div class="col-lg-6 col-md-6">
                <div class="card info-card sales-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                    <div class="card-body">
                        <h3 class="fw-bold my-2 text-success"><i class="bi bi-arrow-down"></i> Surat Masuk</h3>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                    class="bi bi-envelope-arrow-down" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99V4Zm1 7.105 4.708-2.897L1 5.383v5.722ZM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1Z" />
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708l-1.25 1.25Z" />
                                </svg>
                            </div>
                            <div class="ps-3">
                                <h6>00</h6>
                                <span class="text-muted small pt-2 ps-1">Total surat masuk</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Surat Keluar --}}
            <div class="col-lg-6 col-md-6">
                <div class="card info-card sales-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                    <div class="card-body">
                        <h3 class="fw-bold my-2 text-danger"><i class="bi bi-arrow-up"></i> Surat Keluar</h3>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    fill="currentColor" class="bi bi-envelope-arrow-up" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99V4Zm1 7.105 4.708-2.897L1 5.383v5.722ZM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1Z" />
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016Z" />
                                </svg>
                            </div>
                            <div class="ps-3">
                                <h6>00</h6>
                                <span class="text-muted small pt-2 ps-1">Total surat keluar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
