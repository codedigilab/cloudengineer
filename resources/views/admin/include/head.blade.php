<meta charset="utf-8" />
<title>IT SUPPORT KHALID</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="IT SUPPORT KHALID" name="description" />
<meta content="Themesbrand" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">
<!-- DataTables -->
<link href="{{ url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<script src="{{ url('assets/js/plugin.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function showAlert(message, type) {
        if (message) {
            Swal.fire({
                icon: type,
                title: message,
                showConfirmButton: false,
                timer: 2000
            });
        }
    }
    </script>