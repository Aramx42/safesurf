<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/schurkeneiland.css" rel="stylesheet" type="text/css">
	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
  .modal-header, h4, .close {
      color:white !important;
      text-align: bottom;
      font-size: 50px;
  }
  .modal-body {
	  font-size:30px;
  }
  .modal-footer {
  }
  </style>
  
    <title>Onderwerp</title>
</head>
<body 
>

        <!-- nickname -->
        <div id="nickname">
            <a class="text-box-text" align="center">Nickname </a>
        </div>
             
   
    
         <!-- zoekfunctie  -->
        <div id="zoekfunctie">
   		<input type="text" placeholder="Search.." style="color: black"> 
        </div>
       
            <!-- pijltje  -->
            <div id="pijltje">
                <a href="index.php">
                    <img border="0" alt="W3Schools" src="images/go-back-icon.png" width=30%>
                </a>
            </div>
             
			 <!-- stopknop linksonderin -->
			 <div id="stopknop">
                <a href="index.php">
                    <img border="0" alt="W3Schools" src="images/stop.png" width=13%>
                </a>
            </div>  
    
            <!--robot -->
            <div id="robot">
                <img src="images/robot.png" width=24%> 
            </div>
   
    
    
    <!--Les elementen -->
    <div class="div-onderwerp">
	
	<!--Personage -->
		<div id="personage">
             <img src="images/karakter.png" width =40%></a>
        </div>
    <!-- elementen-->
        <div id="element1">
			<a href="#myModal1" role="button" data-toggle="modal" data-target="#myModal1"> <img src="images/info.png" width=150%";></a>
        </div>
        	<!-- Modal1 INFOGRAPHIC -->
	<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body" style="padding:40px 50px;">
		<p>Infographic</p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">terug</button>
      </div>
      </div>
      
    </div>
  </div> 
        <div id="element2">
			<a href="#myModal2" role="button" data-toggle="modal" data-target="#myModal2"> <img src="images/filmpje.png" width=15%></a>
        </div>
        
	<!-- Modal2 FILMPJE-->
	<div class="modal fade" id="myModal2" role="dialog">
		<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Filmpje</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
		<p>Bekijk hier een filmpje over de gevaren van het internet <br> <br>
		<iframe width="427" height="240"
		src="https://www.youtube.com/embed/Uoh-YmNCn3U" frameborder="0" 
		allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">terug</button>
      </div>
      </div>
      
    </div>
  </div> 
  
  
        
        <div id="element3">
			<a href="#myModal3" role="button" data-toggle="modal" data-target="#myModal3"> <img src="images/quiz.png" width=20%></a>
        </div>
        
	<!-- Modal3 QUIZ -->
	<div class="modal fade" id="myModal3" role="dialog">
		<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body" style="padding:40px 50px;">
		<p>quiz</p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">terug</button>
      </div>
      </div>
      
    </div>
  </div> 
        <div id="element4">
			<a href="#myModal4" role="button" data-toggle="modal" data-target="#myModal4"> <img src="images/game.png" width=16%></a>
        </div>
		
			<!-- Modal4 GAME -->
	<div class="modal fade" id="myModal4" role="dialog">
		<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body" style="padding:40px 50px;">
		<p>spelletje</p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">terug</button>
      </div>
      </div>
      
    </div>
  </div> 
		

		
		<div id="welkom" >
             <img src="images/schurkeneiland.png" width="90%" height="120%"></a>
		</div>
		

    
    </div>

</body>
</html>