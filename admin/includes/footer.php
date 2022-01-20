 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="#">OROARS</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    try{
    // $("#example1").DataTable({
    //   "responsive": true, "lengthChange": false, "autoWidth": false,
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // // $('#example2').DataTable({
    // //   "paging": true,
    // //   "lengthChange": false,
    // //   "searching": false,
    // //   "ordering": true,
    // //   "info": true,
    // //   "autoWidth": false,
    // //   "responsive": true,
    // // });
    }catch(e){
      console.log(e)
    }
  });
  (function(seconds) {
      var refresh,
          intvrefresh = function() {
              clearInterval(refresh);
              refresh = setTimeout(function() {
                 location.href = location.href;
              }, seconds * 1000);
          };

      $(document).on('keypress click', function() { intvrefresh() });
      intvrefresh();

  }(60)); // define here seconds


</script>

<script src="jquery.js"></script>
<script type="text/javascript">
        $(document).ready(function(){

            $('#CategoryID').on('change',function(){
                var stateID = $(this).val();
                if(stateID){
                    $.ajax({
                        type:'POST',
                        url:'includes/ajaxCat.php',
                        data:'cat_id='+stateID,
                        success:function(html){
                            $('.subcat').html(html);
                        }
                    });

                  //  $('#city').prop('disabled', 'disabled');
                }else{
                    $('#CategoryID').html('<option value="">Select Category first</option>');
                }
            });

        });
        </script>
