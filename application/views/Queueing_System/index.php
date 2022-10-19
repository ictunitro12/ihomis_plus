<style>
p.dotted {border-style: dotted;}
p.dashed {border-style: dashed;}
p.solid {border-style: solid;}
p.double {border-style: double;}
p.groove {border-style: groove;}
p.ridge {border-style: ridge;}
p.inset {border-style: inset;}
p.outset {border-style: outset;}
p.none {border-style: none;}
p.hidden {border-style: hidden;}
p.mix {border-style: dotted dashed solid double;}
.leftborder {  border-left: 1px solid black;
}
.rightborder {  border-right: 1px solid black;
}
.topborder {  border-top: 1px solid black;
}
.bottomborder {  border-bottom: 1px solid black;
}
.centertxt{ text-align: center;
}
</style>


	<div class="container-fluid">`
		<div class="row">
			<div class="col-md-8" align = "center">
				<h2><?php echo FacilityInfo()->hhosname;?>
					<div class="col-md-12">
					<div class="card">
				<div class="card-body">
						<p class="inset">
							<video width="100%" height = "100%" controls>
									<source src="https://archive.org/download/BigBuckBunny_124/Content/big_buck_bunny_720p_surround.mp4" type="video/mp4">	
							</video>
						</p>
						</div>
				</div>
					</div>	
			</div>	

			<div class="col-sm-4" align = "center">
				<div></div>
				<div class="col-md-12">
					<h3 class="ml1">
						<span class="text-wrapper">
							<span class="line line1"></span>
							<span class="letters" style="color:red"><b>NOW SERVING !</b></span>
							<span class="line line2"></span>
						</span>
					</h3>
				</div>
				<br>
			<!-- <h3><p class = "solid"><b>NOW SERVING !</b></p> -->
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body bg-danger" align = "center" style = "font-size:30px">
								<label id = "billing" readonly><b>39</b></label>
							</div>
								<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>Billing</b></a>
							</div>
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-body bg-success" align = "center" style = "font-size:30px">
								<label id = "cashier" readonly><b>39</b></label>
							</div>
								<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>Cashier</b></a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-behance" align = "center" style = "font-size:30px">
									<label id = "cashier" readonly><b>39</b></label>
								</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>Laboratory</b></a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-dribbble" align = "center" style = "font-size:30px">
									<label id = "cashier" readonly><b>39</b></label>
								</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>OPTHA/ENT ROOM 3</b></a>
								</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-github" align = "center" style = "font-size:30px">
									<label id = "cashier" readonly><b>39</b></label>
								</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>Pedia Room 7</b></a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-flickr" align = "center" style = "font-size:30px">
									<label id = "cashier" readonly><b>39</b></label>
								</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>Medicine Room 8</b></a>
								</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-reddit" align = "center" style = "font-size:30px">
									<label id = "cashier" readonly><b>39</b></label>
								</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>Surgery Room 9</b></a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-youtube" align = "center" style = "font-size:30px">
									<label id = "cashier" readonly><b>39</b></label>
								</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View');?>" class="btn btn-default btn-block"><b>OB-Gyne Room 6</b></a>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script type="text/javascript">
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>