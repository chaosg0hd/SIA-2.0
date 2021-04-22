<style>

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Display tables information, NO BUTTON TO EDIT, button is to elaborate order content, this data should be provided by POS, 
	</p>	
	<p>
	TODO: This should be sorted by how long the order has been waiting
	</p>
</div>

<div class="container-fluid">

	<!-- Show all tables -->

	<table class="table table-hover table-bordered">
		<tr>
			<th>Order ID</th>
			<th>Table No.</th>
			<th>Order Issued</th>
			<th>Order Status</th>
			<th>Actions</th>
		</tr>

		<!-- SQL Query -->

		<?php
			$tables = $conn->query("SELECT * FROM orders_tb");
			while($row=$tables->fetch_assoc()):
		?>

		<!-- To be executed every while loop -->	
			
		<tr>
			<td><?php echo $row['order_id']?></td>
			<td><?php echo $row['table_no']?></td>			
			<td><?php echo $row['order_dt']?></td>			
			<td><?php echo $row['order_status']?></td>			
			<td> Put Buttons Here</td>
		</tr>	
	
		<?php 
		endwhile; 
		?>

	</table>
</div>

<div class="container-fluid">
	<div id = "header" class="container-fluid">
		<p>
		TODO: Put form here to elaborate selected order
		</p>		
	</div>
</div>





<script>
	
</script>