<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div class="header_contact">
	<div class="nav">
		<div class="main_logo">
		  <img src="images/logo.png">
			 <ul>
				  <li><a href="contact-us.php">Contact</a></li>
				  <li><a href="#">Cahier de charge</a></li>
				  <li><a href="#">Engagement</a></li>
				  <li><a href="#">Services</a></li>
				  <li><a href="competences.html">Competences</a></li>
				  <li><a href="index.html">Acceuil</a></li>
			</ul> 
		</div>	
	</div>
</div>


	<div class="container" >
	 <div class="col-sm-6">
  <form action="contact-us-send.php" method="post">
<br><br>
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="prenom">prénoms</label>
    <input type="text" id="lname" name="lastname" placeholder="Ton prénoms..">

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Ton e-mail..">
   
 	<label for="comment">Sujet</label>
    <textarea id="sujet" name="sujet" placeholder="Ecrit.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div> 
</div> 

	<div id="footer_index">
		<div class="box_du_footer_index">
			<div class="col-sm-4">
			 	<div class="text_inside_footer">
					<h4><b>A propos</b></h4><br>
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</h4>
				</div>
			</div>
		</div>
	</div>

</body>
</html>