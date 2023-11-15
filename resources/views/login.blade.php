<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arsip Digital Sukarasa - Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Icon Desa -->
    <link href="login/images/logodesa.png" rel="icon">
    <link href="login/images/logodesa.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="login/css/style.css" />
</head>

<body>
    <section class="ftco-section">
        <div class="container container-mobile">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img bg-login-mobile" style="background-image: url(login/images/bg.png)"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100 text-center">
                                    <img src="login/images/logodesa.png" alt="desasukarasa" width="100px">
                                    <h2 class="text-primary" style="font-weight: bolder">Arsip Digital</h2>
                                    <h5 class="mb-4" style="margin-top: -10px">Desa Sukarasa</h5>
                                </div>
                            </div>
                            <form action="/masukberanda" method="POST" class="signin-form">
                                @csrf
                                @include('sweetalert::alert')
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text"
                                        class="form-control border-secondary @error('email') is-invalid @enderror"
                                        placeholder="Email" name="email" />
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password"
                                        class="form-control border-secondary @error('password') is-invalid @enderror"
                                        placeholder="Password" name="password" />
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control rounded submit px-3 text-white"
                                        style="background-color: dodgerblue">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function() {
            $(document).on('click', 'loginerror', function(e) {
                e.preventDefault();
                var link = $(this).attr("submit");

                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="#">Why do I have this issue?</a>'
                });

            });
        });
    </script>
</body>

</html>
