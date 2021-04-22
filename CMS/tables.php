<style>

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Display tables information, add button to edit tables, add button to add new table
	</p>	
	
</div>

<div class="container-fluid">

	<!-- Show all tables -->

	<table class="table table-hover table-bordered">
		<tr>
			<th>Table No.</th>
			<th>No. of Seats</th>
			<th>Actions</th>
		</tr>

		<!-- SQL Query -->

		<?php
			$tables = $conn->query("SELECT * FROM tables_tb");
			while($row=$tables->fetch_assoc()):
		?>

		<!-- To be executed every while loop -->	
			
		<tr>
			<td><?php echo $row['table_no']?></td>
			<td><?php echo $row['table_no_of_seats']?></td>
			<td> Put Buttons Here</td>
		</tr>	
	
		<?php 
		endwhile; 
		?>

	</table>

</div>





<script>
	
</script>