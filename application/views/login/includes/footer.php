<!-- BEGIN COPYRIGHT -->
<div class="copyright">
   2014 &copy; Metronic. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/metronic') ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>