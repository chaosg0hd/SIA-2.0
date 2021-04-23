<style>
#div-inventory{ 
	height: 50vh;
	overflow: auto !important;
	padding: 0px; 
}
#table-inventory{ 
	padding: 0px; 
	font-size: 12px;
}

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Make functions to hide certain columns on click
	</p>	
	<p>
	TODO: Sort items based on something
	</p>
</div>

<div id ="div-inventory" class="table-responsive">

	<!-- Show all tables -->

	<table id ="table-inventory" class="table table-hover table-bordered table-striped table-sm">
		<thead>
			<tr>
				<th class="text-center">Item ID</th>
				<th class="text-center">Name</th>
				<th class="text-center">Description</th>
				<th class="text-center">Quantity</th>
				<th class="text-center">Date Acquired</th>
				<th class="text-center">Date Expired</th>
				<th class="text-center">Unit Price</th>
				<th class="text-center">Min</th>
				<th class="text-center">Remarks</th>
				<th class="text-center">Last Modified</th>
				<th class="text-center">Modified by</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				$inventory = $conn->query("SELECT * FROM inventory_tb");
				while($row=$inventory->fetch_assoc()):
				?>
				<tr>
					<td class="text-center"><?php echo $row['item_id'] ?></td>

					<td class="text-center">
							<p><?php echo $row['item_name'] ?></p>
					</td>
									
					<td class="text-center">
							<p><?php echo $row['item_description'] ?></p>
					</td>
									
					<td class="text-center">
							<p><?php echo $row['item_quantity'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['item_acq'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['item_exp'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['item_unit_price'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['item_minimum'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['remarks'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['last_mod_date'] ?></p>
					</td>

					<td class="text-center">
							<p><?php echo $row['last_mod_user'] ?></p>
					</td>

					<td class="text-center">
						buttons here
					</td>
				</tr>
				<?php endwhile; ?>
		</tbody>
	</table>
</div>

<div class="container-fluid">
	<div id = "header" class="container-fluid">
		<p>
		TODO: idk
		</p>		
	</div>
</div>

<script>

</script>