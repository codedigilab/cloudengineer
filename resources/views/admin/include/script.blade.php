<div class="rightbar-overlay"></div>


<script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ url('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ url('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/js/pages/datatables.init.js') }}"></script>
<script src="{{ url('assets/js/app.js') }}"></script>
<script src="{{ url('assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ url('assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script>
    function confirmDelete(form) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
        return false;
    }
    </script>
