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
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Gerdi Verbeet</a></li>
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><b> Inloggen</b></a></li>
    </ul>
  </div>
  </div>
</nav>
  
<div class="container">

<div class="loginpagina">
    <form action="validate.php" method="post">
        <div class="login-box">
          <div class="loginh2">
        <h2>Parlement<b>nl</b></h2><h3>Inloggen met uw Account</h3>
        <br></div>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Email"
                         name="email" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Wachtwoord"
                         name="wachtwoord" value="">
            </div>
 
            <input class="button" type="submit" name="login" value="Inloggen">
        </div>
    </form>
</div>
</div>

</body>
</html>