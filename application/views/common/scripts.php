			</div>
		</main>
	</div>
<footer class="c-footer">
    <strong>Copyright &copy; 2020 <a href="#">Department of Health</a>.</strong>&nbsp;All rights
    reserved.
</footer>
<script src="<?php echo base_url();?>assets/vendors/coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/coreui/utils/js/coreui-utils.js"></script>
<script src="<?php echo base_url();?>assets/vendors/ladda/js/spin.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/ladda/js/ladda.min.js"></script>
<script src="<?php echo base_url();?>assets/js/loading-buttons.js"></script>
<script src="<?php echo base_url()?>assets/vendors/toastr/js/toastr.js"></script>
<script src="<?php echo base_url()?>assets/vendors/maskinput/js/jquery.maskedinput.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/utilities.js"></script>
<script src="<?php echo base_url()?>assets/plugin/pace/pace.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/moment/js/moment.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
<!-- DROPZONE -->
<script src="<?php echo base_url() ?>assets/vendors/dropzone/5.7.0/dist/min/dropzone.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/vendors/moment/js/moment.min.js"></script>	 -->
<script src="<?php echo base_url()?>assets/plugin/JQuery-Session-Plugin-master/jquery.session.js"></script>
 <!--[if IE]><!-->
<script src="<?php echo base_url();?>assets/vendors/coreui/icons/js/svgxuse.min.js"></script>
<script src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>	

<script>
  $('[data-toggle="tooltip"]').tooltip();
</script>
<script>

 employeeInformation("<?php echo $this->ion_auth->user()->row()->id;?>");
  function toggleLayoutTheme() {
      if (document.body.classList.contains('c-dark-theme')) {
          document.body.classList.remove('c-dark-theme');
          localStorage.setItem('LayoutTheme', 'light');
      } else {
	
          document.body.classList.add('c-dark-theme');
          localStorage.setItem('LayoutTheme', 'dark');
      }
  }

function loadLayoutTheme() {
  if (localStorage.getItem('LayoutTheme') == 'dark') {
      document.body.classList.add('c-dark-theme');
  } else {
      localStorage.setItem('LayoutTheme', 'light');
  }
} loadLayoutTheme();

function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  console.log(li);
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

</script>

<style>
td.no-wrap {
    white-space: nowrap;
    
}
</style>
</div>
</div>
</body>
</html>
