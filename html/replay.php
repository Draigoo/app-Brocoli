<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Projet Brocoli</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
	<?php require "header.html" ?>

	<div  class="col-md-2"> 
			<br>
			<h1>Modèles :</h1>
			<hr>
	</div>
	<div id="rename" >
		
				<a class="police"> Renommer le fichier : </a> 
				<input type="text"  size="50">
	
	</div>

	<div>
		<label class="police col-md-3 row" >Changer la valeur :</label>
		<span class="vertical-line"></span>
		<label class="police" id="struct">Changer la structure :</label>

		<button type="button" class="btn btn-lg btn-primary" disabled>Click here</button>
		<button type="button" class="btn btn-lg btn-primary" disabled>Click here</button>
	</div>
	<div class="rounded"> 
			<table class="table table-bordered col-md-3" >
  				<thead>
    				<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
				      			
				   	</tr>
				</thead>
				<tbody>
				    <tr>
				      <th scope="row">1 </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>php</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td colspan="1">php </td>

   					</tr>
   					<tr>
				      <th scope="row">4 </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">.... </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">... </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">.. </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">.. </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">.. </th>
				      <td> Completer php </td>
				     
				    </tr>
				    <tr>
				      <th scope="row">Last </th>
				      <td> Completer php </td>
				     
				    </tr>
 				</tbody>
			</table>

</div>



	<?php require "footer.html" ?>
</body>
</html>