<!doctype html>
<html lang="en">

<head>
@include('admin/include.head')

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('admin/include.header')
    @include('admin/include.sidebar')




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">KHALID</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">KHALID</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                       

                        <div class="col-xl-12">
                            <div class="card">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-9 col-sm-8">
                                            <div class="p-4">
                                                <h5 class="text-primary">Welcome Back !</h5>
                                                <p>KHALID Dashboard</p>

                                                <div class="text-muted">
                                                    <p class="mb-1"><i
                                                            class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                        If several languages coalesce</p>
                                                    <p class="mb-1"><i
                                                            class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                        Sed ut perspiciatis unde</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                        It would be necessary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 align-self-center">
                                            <div>
                                                <img src="assets/images/crypto/features-img/img-1.png" alt=""
                                                    class="img-fluid d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    <!-- end row -->

        

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

  

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- crypto dash init js -->
    <script src="assets/js/pages/crypto-dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>