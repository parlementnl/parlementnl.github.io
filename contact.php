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
      <a class="navbar-brand" href="index.php">tristanvrs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="tk.php"><b>Tweede Kamer</b></a></li>
      <li><a href="ek.php">Eerste Kamer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
    </ul>
  </div>
  </div>
</nav>
  
<div class="container">
  <h3>Welkom op de contact pagina</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus, dolor vel ultrices malesuada, est nisi suscipit ipsum, condimentum egestas dolor augue ut nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit quam lorem, quis accumsan augue ornare a. Fusce vitae sem quis velit posuere euismod quis nec ante. Suspendisse non pretium magna. Cras vehicula, sapien sed rhoncus volutpat, enim nisi interdum risus, non posuere dolor massa vitae ante. Nam eget risus non risus vestibulum iaculis molestie ac nulla. In non risus lacus. Integer tristique accumsan libero finibus mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc eu metus non metus tincidunt cursus id vel nulla. Sed fermentum consequat placerat. Pellentesque vehicula velit eget varius consequat.</p>
</div>

</body>
</html>