<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IFPE-Pós</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	
	.container-fluid{
		background-color: #fff;
		}
		
	.col-md-10{
		
		height: 200px;
	}
	
	.col-md-9{
			
		height: 500px;
		margin-top: 50px;
	}
	
	.col-md-12{
		background-color: #0A5517;
		height: 50px;
		
	}
	
	.navbar-header a.navbar-brand {
		color: #fff;
	}
	
	
	
#logo{
	width: 432px;
	height: 100px;
	float: left;
	margin-top: 20px;
}

#nav-menu{
	height: 52px;
}

#sliderhome{
	margin-left: 200px;
	
}

#conteudo{
	
	width: 1200px;
	height: auto;
	margin: auto;
}

.col-md-3{
		margin-top: 50px;
	}

	
	</style>
	
  </head>
  <body>
    
	
	<div class="container-fluid">	
	
		<div class="row">
			<div class="col-md-10" >			
				<div id="logo">
					<img src="ifpe.png" height="150px" >
				</div>			
			</div>			
			<div class="col-md-2">
					<h1>Login e cadastre-se</h1>					
			</div>	
		</div>
		
	<!-- aqui começa o menu -->	
		<?php
		include 'includes/menu.php';
		?>
		
	<!-- termina -->
	<div id="conteudo" >	
		<div class="row">
			<div class="col-md-9">	<!-- Slides -->				
					<?php
					include 'includes/slid2.php';
					?>			
			</div> 			
			<div class="col-md-3" >			
					<h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h5><br>
					<h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h5><br>
					<h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h5><br>
					<h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h5><br>
					
			</div>
		
		</div> <!--Slid e aside bar-->
		
		<div class="row">
		
			<div class="col-md-9">
			
			<h1>NOTAS</h1>
		
		</div>
		
		</div> <!--Notas-->
		
		
	</div>	
	
		<div class="row">
		
			<div class="col-md-12">
			
			</div>
		
		</div>
		
	</div> <!--Container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>