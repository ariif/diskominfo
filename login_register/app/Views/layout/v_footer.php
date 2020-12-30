    <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <a href="http://fgood.net/web" target="_BLANK">PT Elrei Dasera Nusantara</a>.</strong> All rights reserved.
    </footer>

    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        // Send Search Text to the server
        $("#search").keyup(function() {
          let searchText = $(this).val();
          if (searchText != "") {
            $.ajax({
              url: "<?php echo base_url('map/search') ?>",
              method: "post",
              data: {
                query: searchText,
              },
              success: function(response) {
                $("#show-list").html(response);
              },
            });
          } else {
            $("#show-list").html("");
          }
        });
        // Set searched text in input field on click of search button
        $(document).on("click", "a", function() {
          $("#search").val($(this).text());
          $("#show-list").html("");
        });
      });
    </script>

    <!-- datatables -->
    <link rel="stylesheet" href="">
    <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <script>
      $(function() {
        $('#example1').DataTable();
      });
    </script>


    </body>

    </html>