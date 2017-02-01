<!DOCTYPE html>
<html>
<head>
<?php include_once 'modules/init.php'; ?>
<meta charset="UTF-8">
<meta name="description" content="Mesara AS plus grill">
<meta name="keywords" content="pečenjara,pečenje,mesara,meso,roštilj,rostilj,pecenjara ">
<meta name="author" content="Mesara AS plus grill">

<?php include_once 'modules/bootstrap.php'; ?>




<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>

<!--TABS JQUERI UI -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

$(document).ready(function(){
	  $( function() {
    $( "#tabs" ).tabs();
		} );
		
		
});		



</script>

<script>
$(document).ready(function(){

	var trenutni = 1;
	
	

	setInterval (function(){
		$(" #slider .slides ").animate({'margin-left':'-=820'}, 3000, function(){
		trenutni++;
		if(trenutni === 4){
			trenutni=1;
			$(' #slider .slides ').css('margin-left', 0);
		}
		});
	},4000);





});
</script>



<!--CSS -->
<style>
body {	margin:0px;
		background-color:rgba(255, 26, 26, 0.78);
		
		}
		
#glavni {	margin-left:86px;
			margin-right:46px;
			margin-top:0px;
			background-color:white;
			
							
							}
							
h3, p {	margin:0px;
		text-align: center;
		font-family: 'Anton', sans-serif;
		color:red;}
		
header {margin-top: 20px;
		margin-left:80px;
		margin-right:80px;
		border:5px solid red;
		padding-top:5px;
		border-radius: 25px;
		margin-bottom:20px;}		

#ime {	margin:0px;
		text-align: center;
		font-family: 'Anton', sans-serif;
		font-size:350%;
		color:red;
		}

#radnja	{letter-spacing: 10px;
		color:red;}

#tabs {	width:90%;
		margin:auto;
		font-family: 'Oxygen', sans-serif;
		border:none;
		}





							
#footer {	border-top:1px solid;
			padding-top:2px;
			padding-bottom:10px;
			background-color:rgba(230,230,230,1);}

	




#slider {
	width:820px;
	height:420px;
	overflow:hidden;
	}
	
#slider .slides {
	display:block;
	width:6000px;
	height:320px;
	margin:0px;
	padding:0px;
	}
#slider .slide {
	float:left;
	list-style-type:none;
	width:820px;
	height:420px;}		
							
</style>



</head>
<body>
	<div class="container glavni" id="glavni">
		<div class="row" id="vrh">
			<header>
				<h3 id="radnja">MESARA I PEČENJARA</h3>
				<h3 id="ime">AS plus grill</h3>
				<h3>RADNO VREME</h3>
				<h3>08 h - 22 h</h3>
				<p><span style="padding-right:55px;">Skretanje za Vranić</span> <span>063 12 01 801</span></p>
				<p><span style="padding-right:10px;">Kosmajskih Partizana 222a </span> <span> 011 8340 054</span></p>
			</header>
			
		</div>	
		
		<div class="row" id="sredina">
		
			<div id="tabs">
				  <ul>
					<li><a href="#tabs-1">Cenovnik</a></li>
					<li><a href="#tabs-2">Prilozi</a></li>
					<li><a href="#tabs-3">Galerija</a></li>
				  </ul>
				  <div id="tabs-1">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8">
								<?php include 'cenovnik.php'; ?> <br /><br />
								
									<section>
									<strong>BESPLATANA USLUGA PEČENJA SVIH ARTIKALA!</strong>
								</section>
								</div>
								<div class="col-md-4">
								<h3>Lokacija</h3>
								
								<p>Ibarska magistrala <br />25km od Beograda</p>
								<br />
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2840.5208957007667!2d20.35318531511257!3d44.606823779100075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a0dde46d4cbc3%3A0xb7bd0af383e6977f!2sAS+Plus!5e0!3m2!1sen!2srs!4v1475662282600" width="350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>	
				  
				  
				  </div>
				  <div id="tabs-2">
					
					<div class="container-fluid">
							<div class="row">
								<div class="col-md-8">
								<?php include 'prilozi.php'; ?> 
								
							
								
								</div>
								<div class="col-md-4">
								<h3>Lokacija</h3>
								
								<p>Ibarska magistrala <br />25km od Beograda</p>
								<br />
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2840.5208957007667!2d20.35318531511257!3d44.606823779100075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a0dde46d4cbc3%3A0xb7bd0af383e6977f!2sAS+Plus!5e0!3m2!1sen!2srs!4v1475662282600" width="350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					
					
					
					
					
					
				  </div>
				  <div id="tabs-3">
												
												<div class="container-fluid" id="slideshow" >
													
													<div class="row">

													<h3 style="align:left;">SLIKE</h3> <br />	
														
														<div id="slider">
	<ul class="slides">
		<li class="slide"><img src="slike/1.jpg"></li>
		<li class="slide"><img src="slike/2.jpg"></li>
		<li class="slide"><img src="slike/3.jpg"></li>
		<li class="slide"><img src="slike/1.jpg"></li>
		
	</ul>
</div>
													<hr />
													<div>
														<img id="1" src="slike/1.jpg"> <br /> <br />
														
														<img src="slike/2.jpg"> <br /> <br />
													   
													 
														 <img src="slike/3.jpg"> <br /> <br />
													  
													</div>
													  
													</div>
													  
													 
													  
													  
												</div>
							
										
										
	  

				</div>
									
			</div>
									
		</div>
		<div class="row" id="footer">
		
			
			<hr />
			
		<div class="col-md-5">	
			
			<h6 style="color:red"><strong>AS Plus grill</strong></h6>
			<br />
			<i class="fa fa-phone-square fa-3x" aria-hidden="true" style="color:red;">011/8340-054</i> <br />
			<i class="fa fa-mobile fa-3x" aria-hidden="true" style="color:red;">063/1201-801</i>
		</div>
		<div class="col-md-7">
			
		</div>
		</div>
	</div>
</body>














</html>