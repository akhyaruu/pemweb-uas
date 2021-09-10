   <footer class="main-footer">
      <strong>Admin Dashboard</strong>
   </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="<?= base_url('assets/backend/plugins/jquery/jquery.min.js')?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/backend/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/backend/js/adminlte.js')?>"></script>

  <script>
    const inputTravel = document.getElementById('cari-travel-id');
    inputTravel.addEventListener('keyup', async function(){
      const response = await fetch('<?= base_url('page/ajax')?>');
      const ajaxData = await response.json();
      ajaxData.map
    });
  </script>
  
</body>