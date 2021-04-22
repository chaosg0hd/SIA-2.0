<style>
  
</style>

<div id = "header" class="container-fluid">
	<p>
	DEV NOTES
	</p>	
</div>

<div id ="header" class="container-fluid">
	<p>
	TODO: Display List of Transactions
	</p>
</div>

<div class="container-fluid">

	<!-- Show all tables -->

	<table class="table table-hover table-bordered">
		<tr>
			<th>Invoice No.</th>
			<th>Invoice ID</th>
			<th>Order ID</th>
			<th>Date</th>
			<th>Amount</th>
			<th>Deduction</th>
			<th>Total</th>
			<th>Actions</th>
		</tr>

		<!-- SQL Query -->

		<?php
			$tables = $conn->query("SELECT * FROM invoice_tb");
			while($row=$tables->fetch_assoc()):
		?>

		<!-- To be executed every while loop -->	
			
		<tr>
			<td><?php echo $row['invoice_no']?></td>
			<td><?php echo $row['invoice_id']?></td>			
			<td><?php echo $row['order_id']?></td>			
			<td><?php echo $row['invoice_date']?></td>						
			<td><?php echo $row['invoice_amount']?></td>					
			<td><?php echo $row['invoice_deduction']?></td>
			<td><?php echo $row['total']?></td>
			<td> Put Buttons Here</td>
		</tr>	
	
		<?php 
		endwhile; 
		?>

	</table>
</div>

<div id ="header" class="container-fluid">
	<p>
	TODO: Form here to elaborate selected transaction
	</p>
</div>

<script>
	
</script>