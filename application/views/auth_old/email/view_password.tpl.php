<html lang="en">
  <body class="align-items-center">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card-group">
            <div class="card p-4">
			<div class="card-body">
			  <h4 class="text text-success">
				<i class="fa fa-vcard"></i>Email address: <?php echo $username;?>
			  </h4>
                <p class="text-success">Click the button below</p>
                <div class="row">
                  <div class="col-md-12">
                    <a href="<?php echo base_url()?>auth/setPassword/<?php echo $activation_code;?>">Set your password now.</a>
                  </div>	
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>