<style> 
#viewpanel{
    position: absolute;
	bottom: 0;
	right: 0;
	z-index: 10;
	border-radius: 25px 25px 0px 0px;
	width: 85%;
	height: 85%;
	padding: 20px;
	display: flex;
	justify-content: center;
    background: var(--color_background);				
	background-image: linear-gradient(to top, rgba(173, 110, 81, .1), rgb(173, 156, 81, .5));
}
#content-container{
	margin-top: 20px;
	margin-bottom: auto;
	background: var(--white);
	padding: 20px;	
}
.container-fluid{	
	padding: 10px;
	align-items: center;
	justify-content: center;
}
#header{
    background: rgba(128, 128, 150, .5);	
	color: var(--black);
	padding: 10px;
    font-size: 20px;
}
</style> 

<div id="viewpanel" class ="flex-container">	
	<div id = "content-container">
		<?php include './'.$sys.'/'.$page.'.php' ?>
	</div>
</div>

<script>

    
</script>