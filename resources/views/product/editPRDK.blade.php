<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product | Tambah Data</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="font-size: 25px;"><sup>265</sup> Hernita </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fs-3 bi bi-house-fill"></i>
                    <span class="fs-5 fw-bold">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-light" href="/product">
                    <i class="fs-3 bi bi-cart-fill text-primary"></i>
                    <span class="text-primary fs-5 fw-bold">Product</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pembayaran">
                    <i class="fs-3 bi-credit-card-2-front-fill"></i>
                    <span class="fs-5 fw-bold">Pembayaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <br>
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <form action="{{ url('updatePRDK', $prdk->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h1 class="h3 mb-2 text-gray-800">Ubah Data Produk</h1>
                        <!-- <p class="mb-4">Deskripsi di sini <a target="_blank"
                                href="https://datatables.net">official DataTables documentation</a>.</p>-->

                        <!-- body -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="product" name="product"
                                aria-describedby="emailHelp" required autocomplete="off" value="{{$prdk->product}}">
                            <div id="emailHelp" class="form-text">Ex: Beras 1kg</div>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Harga(Rp)</label>
                            <input type="text" class="form-control" id="harga" name="harga" aria-describedby="emailHelp"
                                required autocomplete="off" value="{{$prdk->harga}}">
                            <div id="emailHelp" class="form-text">Ex: 1.000.000</div>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar"
                                aria-describedby="emailHelp" required autocomplete="off" value="{{$prdk->gambar}}">
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <div id="emailHelp" class="form-text">Gambar Sebelumnya</div>
                            <img src="{{asset('gambar-produk/' . $prdk->gambar)}}" alt="" style="width: 145px;">
                        </div>
                        <!-- end form text field -->
                        <input type="submit" id="submit" class="btn btn-primary" onclick="add()">
                        <a href="/product" class="btn btn-warning" onclick="back()">Kembali</a>
                        <!-- end body -->
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

</body>

<script>
    function add() {
        var result = confirm('Apakah data yang anda ubah sudah benar?');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>

<script>
    function back() {
        var result = confirm('Ingin kembali tanpa mengubah data?');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>

</html>