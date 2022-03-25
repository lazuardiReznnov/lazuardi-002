<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url('css/fontawesome/css/all.min.css'); ?>" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Roboto:wght@300;400;700&family=Sansita+Swashed:wght@300;600&display=swap"
        rel="stylesheet">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                LAZUARDI
                <i class="bi bi-activity"></i>
                CODE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
                    <a class="nav-link" href="#">TENTANG</a>
                    <a class="nav-link" href="#">KONTAK</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- kontent -->

    <div class="row g-0 mt-5">
        <!-- Aside -->
        <div class="col-lg-2 mt-1">
            <aside class="shadow-sm rounded-bottom">
                <h3 class="shadow-sm"><i class="fa-solid fa-gauge"></i>Dashboard </h3>
                <hr />

                <!-- Menu -->
                <div class="list-group list-group-flush">
                    <a class="list-group-item" href="#">
                        <i class="bi bi-person-circle"></i>
                        USER MANAGEMENT
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="bi bi-bag"></i>
                        MODUL MANAGEMENT
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa-solid fa-car fa-fw"></i>
                        UNIT MANAGEMENT
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa-solid fa-chart-column fa-fw"></i>
                        TRACK REPORT
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa-solid fa-table fa-fw"></i>
                        FINANCE
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa-solid fa-person fa-fw"></i>
                        KARYAWAN
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa-solid fa-gear"></i>
                        SPAREPART
                    </a>
                </div>
                <!-- End Menu -->
            </aside>
        </div>
        <!-- end aside -->
        <!-- Kontent -->
        <div class="col-lg-10 p-3">
            <Section id="kontent">
                <div class="container">
                    <div class="row mt-2 mb-2">
                        <div class="col">
                            <h1><i class="fa-solid fa-gauge"></i> DASHBOARD</h1>
                            <hr>
                        </div>
                    </div>
                    <!-- Card Menu -->
                    <div class="row justify-content-center mt-2">
                        <!-- Card Menu Rute -->
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3">
                                        <h1 class="display-4"><i class="fa-solid fa-route"></i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">Daftar Rute</a></h5>
                                            <p class="card-text">Daftar Rute Terbaru</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- card Menu Unit -->
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3">
                                        <h1 class="display-4"><i class="fa-solid fa-car"></i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">Daftar Unit</a></h5>
                                            <p class="card-text">Daftar Rute Terbaru</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Card Menu Report -->
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3">
                                        <h1 class="display-4"><i class="fa-solid fa-table"></i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">REPORT</a></h5>
                                            <p class="card-text">Report Data</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Card Menu Perbaikan -->
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3">
                                        <h1 class="display-4"><i class="fa-solid fa-screwdriver-wrench"></i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">Sparepart & Perbaikan</a></h5>
                                            <p class="card-text">Report Data</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card Menu -->

                        <!-- Finance Menu -->
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3">
                                        <h1 class="display-4"><i class="fa-solid fa-coins"></i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">Finance</a></h5>
                                            <p class="card-text">Keuangan</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Finance Menu -->

                        <!-- Karyawan -->
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 p-3">
                                        <h1 class="display-4"><i class="fa-solid fa-users-gear"></i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">Karyawan</a></h5>
                                            <p class="card-text">Karyawan</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Karyawan -->

                        <!-- Halaman User -->
                        <!-- Header -->
                        <div class="row mb-2 mt-2">
                            <div class="col">
                                <h1><i class="fa-solid fa-circle-user"></i> USER MANAGEMENT</h1>
                                <hr>
                            </div>
                        </div>
                        <!-- Header -->
                        <!-- Menu Atas -->
                        <div class="row justify-content-between mb-5">
                            <div class="col-md-1 mb-2">
                                <a href="#" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="BACK"><i class="fa-solid fa-chevron-left"></i></a>

                            </div>
                            <div class="col-md-2 mb-2">
                                <a href="#" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Add User"><i class="fa-solid fa-user-plus"></i></a>

                            </div>
                        </div>
                        <!-- Menu Atas -->
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Password</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Admin</td>
                                            <td><a href="#" class="badge bg-warning">Edit</a> <a href=" #"
                                                    class="badge bg-danger ml-2">Hapus</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>denis</td>
                                            <td>user</td>
                                            <td><a href="#" class="badge bg-warning">Edit</a> <a href=" #"
                                                    class="badge bg-danger ml-2">Hapus</a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- End Halaman User -->
                    </div>
            </Section>
        </div>
    </div>
    <!-- end Kontent -->



    <footer>
        <p class="text-center">2015-2022 CREATED BY LAZUARDI</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script> --> -->

</body>

</html>