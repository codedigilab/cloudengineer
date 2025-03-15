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
                                <h4 class="mb-sm-0 font-size-18">Data Tables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Tables</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title text-end "><a class="btn btn-primary active"
                                            href="#">Add
                                            Laptop</a></h4>

                                    <table id="datatable-buttons"
                                        class="table table-bordered border-success table table-bordered dt-responsive nowrap w-100">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Store Name</th>
                                                <th>Number</th>
                                                <th>Account No</th>
                                                <th>ISP Provider</th>
                                                <th>Plan</th>
                                                <th>Frequency</th>
                                                <th>Bill Generated</th>
                                                <th>Due Date</th>
                                                <th>Valid Till</th>
                                                <th>Advance Paid</th>
                                                <th>State</th>
                                                <th>Type of the Premise</th>
                                                <th>OLD NO</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($data as $key => $row)
                                                <tr>

                                                    <td><?php echo $key + 1; ?></td>
                                                    <td>{{ $row[0] }}</td>
                                                    <td>{{ $row[1] }}</td>
                                                    <td>{{ $row[2] }}</td>
                                                    <td>{{ $row[3] }}</td>
                                                    <td>{{ $row[4] }}</td>
                                                    <td>{{ $row[5] }}</td>
                                                    <td>{{ $row[6] }}</td>
                                                    <td>{{ $row[7] }}</td>
                                                    <td>{{ $row[8] }}</td>
                                                    <td>{{ $row[9] }}</td>
                                                    <td>{{ $row[10] }}</td>
                                                    <td>{{ $row[11] }}</td>
                                                    <td>{{ $row[12] }}</td>

                                                    <td>
                                                        <a href="{{ route('internet.edit', $key + 1) }}"
                                                            class="btn btn-warning">Edit</a>

                                                        <a href="{{ route('internet.toggleStatus', $key + 1) }}"
                                                            class="btn btn-info">
                                                            {{ $row[13] == 'Enabled' ? 'Disable' : 'Enable' }}
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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

    <!-- Right bar overlay-->

</body>

</html>
