<?php
session_start();
if(isset($_COOKIE['user']))
{
	$user = $_COOKIE['user'];
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Club INSEA TV</title>
  <meta name="description" content="CLUB INSEA TV">

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
<div id="header" class="container">
	<div id="logo">
    <img src="images/logo.png" width="65" height="45"/>
    <h2><a href="sess1.php">Club INSEA TV</a></h2>

	</div>
	<div id="menu">
		<ul>
      <li class="current_page_item"><a href=# accesskey="1" title="">Homepage</a></li>
			><li><a href="objectifs.php" accesskey="2" title="">Objectifs</a></li>
			<li><a href="Evenements.php" accesskey="3" title="">Evenements</a></li>
			<li><a href="Adheration.php" accesskey="4" title="">S'adherer</a></li>
			<li><h3> Marhba :  <?php echo $user;?></h3></li>
      <li>  <a href="deconnecter.php">Deconnecter</a></li>
		</ul>
	</div>
</div>
<div id="extra" class="container">
	<div class="title">
		<h2>Cellules de Club</h2>
		<span class="byline">CULTURE,FILMS,PHOTOS</span>
	</div>
	<div id="three-column">
    <div class="boxD">
			<div class="box">
        <h5>Cellule Cinema-technique :</h5>

        <p>Projection des films,Hosts,Recording events..</p>

			</div>
		</div> </br>
		<div class="boxA">
			<div class="box">
        <h5>Cellule Sponsoring :</h5>

        <p>Contacter des sponsors,Rester en contact constant avec le sponsor,Garantir un financement minimum

                                   </p>
			</div>
		</div>
		<div class="boxB">
			<div class="box">
        <h5>Cellule Communication:</h5>
        <p>Médiatisation et publicité
          Gestion des pages Facebook
          Rédaction des demandes, invitations, description de posts….</p>
        			</div>
		</div>
		<div class="boxC">
			<div class="box">
        <h5>Cellule Medias:</h5></br>

        <p>HUMANS OF INSEA,Micro-Trottoir,Photo-Graphie
        </p>		</div>
	</div>

</div>

<div id="copyright" class="container">
	<p>&copy; BADR KACIMI CHAIMAE BOUAJAJ. All rights reserved. 2017|Dev Web Mr Skalli | </p>
</div>
</body>
</html>
