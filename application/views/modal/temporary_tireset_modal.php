<div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<h4 class="modal-title" id="myModalLabel">Temporary Tireset</h4>
	  </div>
	  <div class="modal-body">
		<table id="grid-data-type" class="table table-condensed table-hover table-striped">
		<thead>
		<tr>
		<th data-column-id="id" data-type="numeric" data-sortable="false">ID</th>
		<th data-column-id="sidewall" data-sortable="false">Sidewall</th>
		<th data-column-id="type" data-type="numeric" data-sortable="false">Type</th>
		<th data-column-id="size" data-sortable="false">Size</th>
		</tr>
		</thead>
		<tbody>
		<?php
			foreach($data as $item){
			$id_arr = explode('_',$item['tireidset']);
			?>
			<tr>
				<td><?php echo $id_arr[1];?></td>
				<td><?php echo $item['sidewall'];?></td>
				<td><?php echo $item['type'];?></td>
				<td><?php echo $item['size'];?></td>
			</tr>
			<?php
			}
		?>
		</tbody>
		</table>
	  </div>
	</div>
</div>

<script>
var grid = $("#grid-data-type").bootgrid();
</script>