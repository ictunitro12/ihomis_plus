<div class="w-auto card card-accent-success " id="sublist"  >
		<div class="card-header">
			<div class="row">
			<div class="col-md-6 col-md-auto	">
				<span class="h3  text-success"><i class="<?php echo $icon?>"></i> Sub Menu <small>List</small></span>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" class="btn btn-success"  id="btnSubModal" name="btnSubModal_Add" onclick = "initAddsub('<?php echo $menuId; ?>');" >
					<i class="fa fa-plus"></i>
					</button>
				</div>
			</div>	
			</div>
		</div>
			 <div class="card-body table-responsive">
					<table id="SubList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Status</th>
								<th width="50px"></th>
							</tr>
						</thead>
						<tfoot class="thead-dark">
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th width="50px"></th>
							</tr>
						</tfoot>
					</table>
				</div>
	</div>
		 <?php  $this->load->view('menus/modal.php');?>

<script>
	$(function(){
		subMenuList('<?php echo $menuId; ?>');
		 
	function subMenuList(menuID)
	{
		var data = new Object();
		data.id = "SubList";
		data.link = baseURL+"Menus/menuSubList/"+menuID;
		data.type = "POST";
		data.coldef =[
		{
			targets: [0],
			visible:false,
			orderable:false,
		},
		{	
			targets: [3],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<i class="fa fa-check"></i>&nbsp Active'; break;
					case 'I' : return '<i class="fa fa-remove"></i>&nbsp Inactive'; break;
					default  : return 'N/A';
				}
			},
		}];
		loadTable(data);
	}
	});
	
	function initAddsub(menuID)
	{
		$('#modalAddSubMenu').modal('show');
		$('#menuID').val(menuID);
		$('#formIdenSub').val('insert');
	}
</script>