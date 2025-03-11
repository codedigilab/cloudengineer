<!doctype html>
<html lang="en">

<head>

        @include('admin/include.head')
        <?php
    $sheet_id = "1SyFDvVPJ6ieDCG4URkw6i4Horb_KbGCQmzAsc_VJsCY";
    $api_key = "AIzaSyARbSMuMMY5GWue3dAarlWr8sfBX-dbTIg";
    $range = "storenumber";
    $url = "https://sheets.googleapis.com/v4/spreadsheets/$sheet_id/values/$range?key=$api_key";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    if (!isset($data['values'])) {
        die("No data found.");
    }
    $headers = $data['values'][0]; // First row as headers
    $rows = array_slice($data['values'], 1); // Remaining rows as data

    ?>

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

                                    <h4 class="card-title text-end "><a class="btn btn-primary active" href="#">Add Laptop</a></h4>
                                    
                                    <table id="datatable-buttons" class="table table-bordered border-success table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                         
                                            <tr>
                                                <th>Store Name</th>
                                                <th>Incharge Name</th>
                                                <th>Incharge Number</th>
                                                <th>AM Name</th>
                                                <th>AM Number</th>
                                                <th>Traner</th>
                                                <th>Traner No</th>
                                                <th>GPM Name</th>
                                                <th>GPM No</th>
                                                <th>IT Person</th>
                                                <th>IT No</th>
                                                <th>Supply Chain</th>
                                                <th>Supply Chain No.</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php foreach ($rows as $row): ?>
                                                
                                                <tr>
                                                    <?php foreach ($row as $cell): ?>
                                                        <td><?php echo htmlspecialchars($cell); ?></td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            <?php endforeach; ?> 
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