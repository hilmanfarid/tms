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
		<th data-column-id="nowo" data-sortable="false">No WO</th>
		<th data-column-id="date" data-sortable="false">Date</th>
		<th data-column-id="vehicle" data-sortable="false">Vehicle</th>
		<th data-column-id="tireidset" data-sortable="false">Tire ID</th>
		<th data-column-id="urutan_transaksi" data-sortable="false">Urutan Transaksi</th>
		<th data-column-id="sidewall" data-sortable="false">Flag</th>
		<th data-column-id="status" data-sortable="false">Status</th>
		<th data-column-id="loc_from" data-sortable="false">Loc From</th>
		<th data-column-id="loc_to" data-sortable="false">Loc to</th>
		</tr>
		</thead>
		<tbody>
		<?php
			if(empty($data)||count($data)==0){
				$data = array();
			}
			$i=1;
			foreach($data as $item){
			$id_arr = explode('_',$item['tireidset']);
			?>
			<tr>
				<td><?php echo $item['nowo'];?></td>
				<td><?php echo $item['date'];?></td>
				<td><?php echo $item['vehicle'];?></td>
				<td><?php echo $id_arr[1];?></td>
				<td><?php echo $i;?></td>
				<td><?php echo $item['flag'];?></td>
				<td></td>
				<td><?php echo $item['location'];?></td>
				<td><?php echo $item['location'];?></td>
			</tr>
			<?php
			$i++;
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