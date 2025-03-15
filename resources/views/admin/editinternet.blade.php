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
                                            <form method="POST" action="{{ route('internet.update', $row) }}">
                                               @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Store Name	</label>
                                                            <input type="text" class="form-control" value="{{ $record[0] }}"
                                                                name="laptoptype"
                                                                placeholder="Store Name	">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-lastname-input">Number</label>
                                                            <input type="text" class="form-control" value="{{ $record[1] }}"
                                                                 name="empcode"
                                                                placeholder="Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Account No</label>
                                                            <input type="text" class="form-control" value="{{ $record[2] }}"
                                                                 name="empemailid"
                                                                placeholder="Account No">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-email-input">ISP Provider</label>
                                                            <input type="text" class="form-control" value="{{ $record[3] }}"
                                                                name="contactnumber"
                                                                placeholder="ISP Provider">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Plan</label>
                                                             <input type="text" class="form-control" value="{{ $record[4] }}"
                                                                 name="employname"
                                                                placeholder="Plan">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Frequency</label>
                                                             <input type="text" class="form-control" value="{{ $record[5] }}"
                                                                 name="designation"
                                                                placeholder="Frequency">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Bill Generated On</label>
                                                             <input type="text" class="form-control" value="{{ $record[6] }}"
                                                                 name="deviceidname"
                                                                placeholder="Bill Generated On">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Due Date</label>
                                                             <input type="date" class="form-control" value="{{ $record[7] }}"
                                                                 name="adopterno"
                                                                placeholder="Due Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Valid Till</label>
                                                             <input type="date" class="form-control" value="{{ $record[8] }}"
                                                                 name="adapterbrand"
                                                                placeholder="Valid Till">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Advance Paid</label>
                                                             <input type="text" class="form-control" value="{{ $record[9] }}"
                                                                 name="productid"
                                                                placeholder="Advance Paid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">State</label>
                                                             <input type="text" class="form-control" value="{{ $record[10] }}"
                                                                 name="laptopmodel"
                                                                placeholder="State">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Type of the Premise</label>
                                                             <input type="text" class="form-control" value="{{ $record[11] }}"
                                                                 name="extra"
                                                                placeholder="Type of the Premise">
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
