<?php 
session_start();

$isLogged = false;
$user = null;

if (isset($_SESSION["user"])) {
  $isLogged = true;
  $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dobrodošli u Met Hotele</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <header id="top" class="header">
        <nav class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="nav navbar-nav navbar-left">
                <ul class="nav navbar-nav">
                  <li><a href="#home">Početna</a></li>
                  <li><a href="#feature">Svi hoteli</a></li>
                  <li><a href="#gallery">Galerija</a></li>
				 <li>
                <a href="php/logout.php" onclick = $("#menu-close").click(); >Odjavi se</a>
                 </li>
                </ul>
              </div>
            </div>
          </nav> 
    </header>
	
	    <section id="home">
        <div class="text-vertical-center">
            <h1>Dobrodošli u Met Hotele</h1>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>