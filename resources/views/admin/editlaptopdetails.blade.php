<!doctype html>
<html lang="en">


<head>
    @include('admin/include.head')
<link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

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
                                <h4 class="mb-sm-0 font-size-18">Form Wizard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Wizard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Basic Wizard</h4>

                                    <div id="basic-example">
                                       
                                        <section>
                                            <form method="POST" action="{{ route('laptopdetails.update', $row) }}">
                                               @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Laptop Type</label>
                                                            <input type="text" class="form-control" value="{{ $record[0] }}"
                                                                name="laptoptype"
                                                                placeholder="Laptop Type">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-lastname-input">Emp Code</label>
                                                            <input type="text" class="form-control" value="{{ $record[1] }}"
                                                                 name="empcode"
                                                                placeholder="Emp Code">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Emp Email Id</label>
                                                            <input type="text" class="form-control" value="{{ $record[2] }}"
                                                                 name="empemailid"
                                                                placeholder="Emp Email Id">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-email-input">Contact Number</label>
                                                            <input type="text" class="form-control" value="{{ $record[3] }}"
                                                                name="contactnumber"
                                                                placeholder="Contact Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Employ Name</label>
                                                             <input type="text" class="form-control" value="{{ $record[4] }}"
                                                                 name="employname"
                                                                placeholder="Employ Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Designation</label>
                                                             <input type="text" class="form-control" value="{{ $record[5] }}"
                                                                 name="designation"
                                                                placeholder="Designation">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Device ID Name</label>
                                                             <input type="text" class="form-control" value="{{ $record[6] }}"
                                                                 name="deviceidname"
                                                                placeholder="Device ID Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Adopter No</label>
                                                             <input type="text" class="form-control" value="{{ $record[7] }}"
                                                                 name="adopterno"
                                                                placeholder="Adopter No">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Adapter Brand</label>
                                                             <input type="text" class="form-control" value="{{ $record[8] }}"
                                                                 name="adapterbrand"
                                                                placeholder="Adapter Brand">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Product ID</label>
                                                             <input type="text" class="form-control" value="{{ $record[9] }}"
                                                                 name="productid"
                                                                placeholder="Product ID">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Laptop Model</label>
                                                             <input type="text" class="form-control" value="{{ $record[10] }}"
                                                                 name="laptopmodel"
                                                                placeholder="Laptop Model">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Extra</label>
                                                             <input type="text" class="form-control" value="{{ $record[12] }}"
                                                                 name="extra"
                                                                placeholder="Extra">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </form>
                                        </section>

                                       

                                    </div>

                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
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
                            </script> © KHALID.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by KHALID
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


   @include('admin/include.script')


</body>

</html>
