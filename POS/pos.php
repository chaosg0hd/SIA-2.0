<style>

#div-summary{
	float:left;
	margin-top: 20px;
	right: auto;
	left: 0px;	
	background: rgba(0, 0, 0, .2);
	width: 45%;
	height: 80%;		
}
#div-product{
	float:right;
	margin-top: 20px;
	right: 0px;
	left: auto;	
	background: rgba(0, 0, 0, .2);
	width: 50%;
	height: 80%;		
}
.btn-product{	
    border-style: dotted;     
    border-radius: 20px 20px 20px 20px;
	margin: 5px;
	min-width: 150px;
	height: 80px;	
    position: relative; 	
    font-size: 18px;	
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word;    
}
.btn-product:hover{
    font-size: 20px;	
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word; 	   
    transition-duration: 0.4s; 
}

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Create Decent POS pls
	</p>	
	<p>
	TODO: Ur Previous Subsystem doesnt even work
	</p>	
</div>

<div id ="div-summary" class ="container-fluid">

	<p>
	PRODUCT SUMMARY GOES HERE
	</p>

	<p>
	TODO: Clear, Total, Print Buttons should be here and other optionals
	</p>

<button id = "clear" class="btn-clear">Clear All</button>

</div>

<div id ="div-product" class ="container-fluid">

	<p>
	DEV NOTES
	</p>
	<p>
	TODO: Functions to organize this buttons by category
	</p>

	<!-- Create Squares per Product -->

	<!-- SQL Query -->	

	<?php
		$tables = $conn->query("SELECT * FROM products_tb");
		while($row=$tables->fetch_assoc()):
	?>

		<!-- To be executed every while loop -->
			
			<?php echo '<button id ="btn-product-'.$row['product_id'].'" class = "btn-product">'?>		<!-- Sets a button id based on item product -->	
				
				<?php echo $row['product_name']?>
				| Price :
				<?php echo $row['product_price']?>
				php
			</button>
		
	<?php 
		endwhile; 
	?>	
</div>

<!-- Script to transfer from product table to summary table -->

<script>

$('.btn-product').click(function() {
    $('#div-summary').append( '<p> The script works, TODO Make this into a button with product name inside store price as a var somewhere</p>');
	$('#div-summary').append($(this).text());
});
	
</script>