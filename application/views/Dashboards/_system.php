<div class="row">
	<div class="col-md-9">
			<div  class="card card-accent-success ">
			<div class="card-header">
				<div class="card-title text-success h5"><i class="fa fa-desktop"></i> Monitoring</div>
			</div>
			<div class="card-body ">
				<div class="row">
				<div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success py-4 px-5 mfe-3" id="warn">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value-lg text-success" id="server">0</div>
                        <div class="text-muted text-uppercase font-weight-bold small">CPU Load </div>
                      </div>
                    </div>
                  </div>
				  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-danger py-4 px-5 mfe-3" id="warn">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value-lg text-danger" id="referral">Offline</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Statistical</div>
                      </div>
                    </div>
                  </div>
				    <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-danger py-4 px-5 mfe-3" id="warn">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value-lg text-danger" id="eclaimsStatus">Offline</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Eclaims</div>
                      </div>
                    </div>
                  </div>
				   <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-danger py-4 px-5 mfe-3" id="warn">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value-lg text-danger" id="referral">Offline</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Referral</div>
                      </div>
                    </div>
                  </div>
				  
                </div>
					<div class="col-6 col-lg-3">
				 <div class="chart-wrapper">
					<div class="text-muted text-uppercase font-weight-bold small">Disk Space</div>
					<canvas id="pie-canvas2"></canvas>
				 </div>
				 </div>
				 
		<div class="col-6">
		<div class="text-muted text-uppercase font-weight-bold small">Server Information</div>
		<div class="box-body box-profile">
							<ul class="list-group">
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-desktop"></i>&nbsp CPU :</b>
									<a class="pull-right text text-success"><?php echo $server['cpu_info'][1];?></a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-windows"></i>&nbsp Operating System:</b>
									<a class="pull-right text text-success"><?php echo $server['os_info'][1];?></a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-cogs"></i>&nbsp Memory:</b>
									<a class="pull-right text text-success" ><?php echo $server['ram_info'][1];?></a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-pie-chart"></i>&nbsp Size:</b>
									<a class="pull-right text text-success"><?php echo $server['size_info'][1];?></a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-desktop"></i>&nbsp Model:</b>
									<a class="pull-right text text-success"><?php echo $server['ver_info'][1];?></a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-network-wired"></i>&nbsp Network Address:</b>
									<a class="pull-right text text-success"><?php echo  $_SERVER['REMOTE_ADDR'];?></a>
								</li>
							</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-md-3">
			<div  class="card card-accent-success ">
			<div class="card-header">
				<div class="card-title text-success h5"><i class="fa fa-bullhorn"></i> Announcements</div>
			</div>
			<div class="card-body ">
			  <iframe class="embed-responsive-item" src="https://oras.pagasa.dost.gov.ph/widget.shtml" width="100%" /></iframe>
			</div>
			</div>
			</div>
	</div>


		<script>
		
		 $(document).ready(function() {
			var timeout = setInterval(loadServerData, 1000);  
			var network = setInterval(isOn, 1000);  
			});
		
		function loadServerData(){
			$.ajax({
				url: "Dashboards/getServerLoad",
				dataType: "json",
				success: function(data) {
					var json = $.parseJSON(data);
					var output=JSON.stringify(json);
					
					 if(output ==75){
						$('#server').text(output);
						$("#warn").removeClass("bg-gradient-success");
						$("#warn").addClass("bg-gradient-danger");
						
					 }else{
						 $('#server').text(output);
						$("#warn").addClass("bg-gradient-success");
						$("#warn").removeClass("bg-gradient-danger");
						 
					 }						 

				   
				}
			});
		}
		
		function isOn()
		{
			var url="https://ihomis-test.doh.gov.ph/server/home";
			$.ajax({
				url: "Dashboards/isOn/"+url,
				dataType: "json",
				success: function(data) {
					var json = $.parseJSON(data);
					console.log(json);
				   $('#eclaimsStatus').text(JSON.stringify(json));
				   
				}
			});
		}
		
		 function createChart(id, type, options) {
      var data = {
        labels: ['Free Space', 'Used Space'],
        datasets: [
          {
            label: 'Chart',
            data: [<?php echo $free;?>, <?php echo $used;?>],
            backgroundColor: [
              '#FF6384',
              '#36A2EB'
            ]
          }
        ]
      };

      new Chart(document.getElementById(id), {
        type: type,
        data: data,
        options: options
      });
    }
	 ['pie'].forEach(function (type) { 
	    createChart(type + '-canvas2', type, {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          labels: [
		  {
            render: 'percentage',
			arc:true,
            precision: 1,
			fontSize: 12,

			shadowColor: 'rgba(255,0,0,0.75)',
			
			showActualPercentages: true,
            fontStyle: 'bold',
			position:'border'
		  },
			{
			render: 'label',
			position:'outside',
			 outsidePadding: 4,
			 
			}
          ]
        }
      });
		});
	
		
		</script>