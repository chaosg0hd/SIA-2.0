<style>

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Display tables information, add button to edit tables, add button to add new reservation, this is better shown as calendar instead of a table or show both
	</p>		
</div>

<div class="container-fluid">

	<!-- Show all tables -->

	<table class="table table-hover table-bordered">
		<tr>
			<th>Reservation No.</th>
			<th>Table No.</th>
			<th>Reservation Issuer</th>
			<th>Date Issued</th>
			<th>Date Reserved</th>
			<th>Reservation Status</th>
			<th>Actions</th>
		</tr>

		<!-- SQL Query -->

		<?php
			$tables = $conn->query("SELECT * FROM reservations_tb");
			while($row=$tables->fetch_assoc()):
		?>

		<!-- To be executed every while loop -->	
			
		<tr>
			<td><?php echo $row['reservation_no']?></td>
			<td><?php echo $row['table_no']?></td>			
			<td><?php echo $row['reservation_issuer']?></td>			
			<td><?php echo $row['reservation_dt_issued']?></td>								
			<td><?php echo $row['reservation_dt']?></td>	
			<td><?php echo $row['reservation_status']?></td>
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
		TODO: Put form here to make new reservation
		</p>		
	</div>
</div>





<script>
	
</script>