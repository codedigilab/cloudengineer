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
                                            <form method="POST" action="{{ route('storeproblem.update', $row) }}">
                                               @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Outlet Name</label>
                                                           
                                                            <select name="laptoptype" class="form-select">
                                                                <option>{{ $record[0] }}</option>
                                                                <option value="Sector 141">Sector 141</option>
                                                                <option value="Alpha 2">Alpha 2</option>
                                                                <option value="Crossing Republic">Crossing Republic
                                                                </option>
                                                                <option value="Indirapuram">Indirapuram</option>
                                                                <option value="Sector 4">Sector 4</option>
                                                                <option value="Sector 73">Sector 73</option>
                                                                <option value="Rajnagar">Rajnagar</option>
                                                                <option value="Gaur City Noida">Gaur City Noida</option>
                                                                <option value="Laxmi Nagar">Laxmi Nagar</option>
                                                                <option value="Dilshad Garden">Dilshad Garden</option>
                                                                <option value="Ashok Vihar">Ashok Vihar</option>
                                                                <option value="Rohini">Rohini</option>
                                                                <option value="East Patel Nagar">East Patel Nagar                                                                </option>
                                                                <option value="Gandhi Vihar">Gandhi Vihar</option>
                                                                <option value="Malviya Nagar">Malviya Nagar</option>
                                                                <option value="Dwarka">Dwarka</option>
                                                                <option value="Janak Puri">Janak Puri</option>
                                                                <option value="Sector 90">Sector 90</option>
                                                                <option value="Sector 4 Gurgoan">Sector 4 Gurgoan                                                                </option>
                                                                <option value="Uttam Nagar">Uttam Nagar</option>
                                                                <option value="Sector 56">Sector 56</option>
                                                                <option value="Sohna Road">Sohna Road</option>
                                                                <option value="Sushant Lok">Sushant Lok</option>
                                                                <option value="Udyog Vihar">Udyog Vihar</option>
                                                                <option value="Vasant Kunj">Vasant Kunj</option>
                                                                <option value="Defence Colony">Defence Colony</option>
                                                                <option value="Sector 16">Sector 16</option>
                                                                <option value="Sarita Vihar">Sarita Vihar</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-lastname-input">Date</label>
                                                            <input type="text" class="form-control" value="{{ $record[1] }}"
                                                                 name="empcode"
                                                                placeholder="Remark">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Problem</label>
                                                            <textarea type="text" class="form-control" value="{{ $record[2] }}" name="empemailid" placeholder="Problem">{{ $record[2] }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-email-input">Status</label>
                                                            
                                                            <select name="contactnumber" class="form-select">
                                                                <option>{{ $record[3] }}</option>
                                                                <option value="Solve">Solve</option>
                                                                <option value="24 Hours Review">24 Hours Review</option>
                                                                <option value="Pending">Pending</option>
                                                            </select>
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
