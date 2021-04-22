<style>

#p-content{
	font-size: 24px !important;
}
#p-title{
	font-size: 36px !important;
}
#div-main{
	float: left;
	margin-top: 20px;
	right: auto;
	left: 0px;	
	background: rgba(0, 0, 0, .2);
	width: 75%;
	height: 80%;		
}
#div-items{
	float:right;
	margin-top: 20px;
	right: 0px;
	left: auto;	
	background: rgba(0, 0, 0, .2);
	width: 20%;
	height: 80%;		
}
.btn-items{	
    border-style: dotted;     
    border-radius: 12px 12px 12px 12px;
	margin: 2px;
	height: 30px;	
    position: relative; 
	padding: 4px;
    font-size: 12px;	
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word;    
}
.btn-items:hover{
    font-size: 14px;	
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word; 	   
    transition-duration: 0.4s; 
}

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: To Show Menu Item
	<p>
	</p>
	TODO: To Show Product as Contents
	</p>	
</div>

<div id ="div-main" class ="container-fluid">	

	<p>
	ITEM CONTENT GOES HERE
	</p>

	<p>
	TODO: To show what a menu item contains 
	</p>

	<div id ="div-content_field">

	<p id = "p-title">

	<p>


	<p id = "p-content">

	</p>
	</div>


</div>

<div id ="div-items" class ="container-fluid">

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
			
			<?php echo '<button id ="btn-items-'.$row['product_id'].'" class = "btn-items" var_title = "'.$row['product_name'].'" var_content = "'.$row['product_content'].'">'?>		<!-- Sets a button id based on item product -->	
				
				<?php echo $row['product_name']?>
				
			</button>
		
	<?php 
		endwhile; 
	?>	
</div>

<!-- Script to transfer from product table to summary table -->

<script>

$('.btn-items').click(function() {
	var title = $(this).attr('var_title');
	document.getElementById('p-title').innerHTML = title;

	var content = $(this).attr('var_content');	
	content = content.replace(/}{/g, ' & ');
	content = content.replace(/[{()}]/g, ' ');


	
	document.getElementById('p-content').innerHTML = content;
});
	
</script>