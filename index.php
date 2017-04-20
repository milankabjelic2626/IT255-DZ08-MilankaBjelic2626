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
                </ul>
                <?php if ($isLogged) { ?>
                 <ul class="nav navbar-nav navbar-left">
                  <li><a><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></a></li>
                  <li><a href="php/logout.php">Izlogij se</a></li>
                </ul>
                <?php } else { ?>
                <ul class="nav navbar-nav navbar-left">
                  <li data-toggle="modal" data-target="#signUp"><a>Registruj se</a></li>
                  <li data-toggle="modal" data-target="#signIn"><a>Uloguj se</a></li>
                </ul>
                <?php } ?>
              </div>
            </div>
          </nav> 
    </header>

    <section id="home">
        <div class="text-vertical-center">
            <h1>Dobrodošli u Met Hotele</h1>
        </div>
    </section>

    <div style="z-index: 9999;" id="signUp" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registruj se</h4>
          </div>
          <div class="modal-body">
          <form id="register-form" action="php/signup.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Korisničko ime">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail adresa">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Lozinka">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-register" value="Registruj se">
                                            </div>
                                        </div>
                                    </div>
                                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
          </div>
        </div>
        
      </div>
    </div>
     <div style="z-index: 9999;" id="signIn" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Uloguj se</h4>
          </div>
          <div class="modal-body">
           <form id="login-form" action="php/login.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Korisničko ime" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Lozinka">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-login" value="Uloguj se">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
          </div>
        </div>

      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>