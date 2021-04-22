<style>

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Display tables information </p>		
</div>

<div class="container-fluid">

	<!-- Show all tables -->

	<table class="table table-hover table-bordered">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Content</th>
			<th>Product Price</th>
			<th>Product Category</th>
			<th>Actions</th>
		</tr>

		<!-- SQL Query -->

		<?php
			$tables = $conn->query("SELECT * FROM products_tb WHERE product_status = 'Unavailable'");
			while($row=$tables->fetch_assoc()):
		?>

		<!-- To be executed every while loop -->	
			
		<tr>
			<td><?php echo $row['product_id']?></td>
			<td><?php echo $row['product_name']?></td>			
			<td><?php echo $row['product_content']?></td>			
			<td><?php echo $row['product_price']?></td>								
			<td><?php echo $row['product_category']?></td>	
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
		TODO: Button to edit and make item available
		</p>		
	</div>
</div>





<script>
	
</script>