<style>

.btn-table{	
    border-style: dotted;     
    border-radius: 20px 20px 20px 20px;
	margin: 5px;
	width: 150px;
	height: 150px;	
    font-size: 18px;	
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word;    
}
.btn-table:hover{
	width: 150px;
	height: 150px;	
    font-size: 20px;	
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word; 	   
    transition-duration: 0.4s; 
}

#btn-table-Available{	        
    background: var(--color_primary);
	color: var(--white);
}

#btn-table-Occupied{	        
    background: var(--red);
	color: var(--white);
}

</style>

<div id = "header" class="container-fluid">
	<p>
	TODO: Display tables as squares with color (DONE), implement function on button click to change status, if possible implement dragability
	</p>	

	
</div>


<div class="container-fluid">

	<!-- Create Squares per table -->

	<?php
		$tables = $conn->query("SELECT * FROM tables_tb");
		while($row=$tables->fetch_assoc()):
	?>

		<!-- To be executed every while loop -->		
	
		<?php echo '<button id ="btn-table-'.$row['table_status'].'" class = "btn-table">'?> <!-- To change button class depending on data value -->
			Table : 
			<?php echo $row['table_no']?>
			Availability :
			<?php echo $row['table_status']?>
		</button>
		
	<?php 
		endwhile; 
	?>

</div>





<script>
	
</script>