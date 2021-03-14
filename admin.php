<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
        <!-- Leuke bootstrap dingen -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Font -->
    <link rel="stylesheet" href="style/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php include("config/db_config.php");?>
    </head>
<body>

<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <i class="fa fa-bars"></i>                   
      </button>
      <a class="navbar-brand" href="index.php">parlement<b>nl</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="tk.php">Tweede Kamer</a></li>
      <li><a href="ek.php">Eerste Kamer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <b>Gerdi Verbeet</b></a></li>
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="container bootstrap snippets bootdey">
    <h3 class="text-primary"> Welkom <b>Gerdi</b></h3>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="https://www.talentkitchen.nl/wp-content/uploads/2020/01/Gerdi.jpg" class="avatar img-circle" alt="avatar" style="height: 100px;">
          <h6>Andere foto kiezen...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-error"></i>
          Uw account is nog niet compleet. Vul hieronder de ontbrekende gegevens aan.
        </div>
        <h3>Gegevens</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Naam:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Naam">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Achternaam:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Achternaam">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="E-mail">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Telefoonnummer:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Telefoonnummer">
            </div>
            <div class="text-right">
					<button type="button" id="submit" name="submit" class="btn btn-secondary">Annuleren</button>
          <input type="button" class="btn btn-primary" value="Opslaan" onclick="play()">
          <audio id="audio" src="sounds/error.m4a"></audio>
				</div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<script>
      function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
</script>

<audio id="music">
  <source src="sounds/error.m4a" type="audio/m4a"/>
</audio>

</body>
</html>