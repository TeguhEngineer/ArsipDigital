@extends('index')
<title>Arsip Digital - Profil</title>
@section('content')
    <div class="pagetitle">
        <h1 class="fw-bold">
            <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-person" viewBox="0 0 16 16">
                <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
            </svg>Profile
        </h1>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="img/logodesa.png" alt="logodesa">
                        <h2>Desa Sukarasa</h2>
                        <h3>Alamat</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Tentang Desa</h5>
                            <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                            <h5 class="card-title">Detail Profil</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Kepala Desa</div>
                                <div class="col-lg-9 col-md-8">-</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama Desa</div>
                                <div class="col-lg-9 col-md-8">-</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8">-</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Telepon</div>
                                <div class="col-lg-9 col-md-8">-</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">-</div>
                            </div>
                        </div>
                    </div><!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
    </section>
@endsection
