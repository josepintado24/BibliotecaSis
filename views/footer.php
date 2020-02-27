<?php
print ('  
   
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./public/dist/js/demo.js"></script>
<script src="./public/app.js"></script>
<script src="./public/plugins/toastr/toastr.min.js"></script>
<script src="./public/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: \'top-end\',
      showConfirmButton: false,
      timer: 3000
    });

    
    $(\'.toastrDefaultSuccess\').click(function() {
      toastr.success(\'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\')
    });
    $(\'.toastrDefaultInfo\').click(function() {
      toastr.info(\'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\')
    });
    $(\'.toastrDefaultError\').click(function() {
      toastr.error(\'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\')
    });
    $(\'.toastrDefaultWarning\').click(function() {
      toastr.warning(\'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\')
    });

    $(\'.toastsDefaultDefault\').click(function() {
      $(document).Toasts(\'create\', {
        title: \'Toast Title\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultTopLeft\').click(function() {
      $(document).Toasts(\'create\', {
        title: \'Toast Title\',
        position: \'topLeft\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultBottomRight\').click(function() {
      $(document).Toasts(\'create\', {
        title: \'Toast Title\',
        position: \'bottomRight\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultBottomLeft\').click(function() {
      $(document).Toasts(\'create\', {
        title: \'Toast Title\',
        position: \'bottomLeft\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultAutohide\').click(function() {
      $(document).Toasts(\'create\', {
        title: \'Toast Title\',
        autohide: true,
        delay: 750,
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultNotFixed\').click(function() {
      $(document).Toasts(\'create\', {
        title: \'Toast Title\',
        fixed: false,
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultFull\').click(function() {
      $(document).Toasts(\'create\', {
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\',
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        icon: \'fas fa-envelope fa-lg\',
      })
    });
    $(\'.toastsDefaultFullImage\').click(function() {
      $(document).Toasts(\'create\', {
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\',
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        image: \'../../dist/img/user3-128x128.jpg\',
        imageAlt: \'User Picture\',
      })
    });
    $(\'.toastsDefaultSuccess\').click(function() {
      $(document).Toasts(\'create\', {
        class: \'bg-success\', 
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultInfo\').click(function() {
      $(document).Toasts(\'create\', {
        class: \'bg-info\', 
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultWarning\').click(function() {
      $(document).Toasts(\'create\', {
        class: \'bg-warning\', 
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultDanger\').click(function() {
      $(document).Toasts(\'create\', {
        class: \'bg-danger\', 
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
    $(\'.toastsDefaultMaroon\').click(function() {
      $(document).Toasts(\'create\', {
        class: \'bg-maroon\', 
        title: \'Toast Title\',
        subtitle: \'Subtitle\',
        body: \'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\'
      })
    });
  });

</script>
</body>
</html>



');