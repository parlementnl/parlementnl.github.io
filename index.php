<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tristanvrs</title>
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
      <li><a href="index.php"><b>Home</b></a></li>
      <li><a href="tk.php">Tweede Kamer</a></li>
      <li><a href="ek.php">Eerste Kamer</a></li>
      <li><a href="verkiezingen.php">Verkiezingen</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://cdn.nos.nl/image/2021/02/24/718084/2560x1440a.jpg" alt="Tweede Kamer. Bron: ANP" style="width:100%;">
        <div class="carousel-caption">
        <a href="verkiezingen.php"><button class="button">Verkiezingen</button></a><br>
        <h3>Bekijk hoe de kamer eruit zou zien volgens de laatste peilingen</h3>
        <h6>Foto: ANP</h6>
      </div>
      </div>

      <div class="item">
        <img src="https://cdn.nos.nl/image/2021/01/16/707614/2560x1440a.jpg" alt="Tweede Kamer. Bron: ANP" style="width:100%;">
        <div class="carousel-caption">
        <a href="tk.php"><button class="button">Tweede Kamer</button></a><br>
        <h3>Bekijk de fracties en zetelverdeling van de Tweede Kamer</h3>
        <h6>Foto: ANP</h6>
      </div>
      </div>
    
      <div class="item">
        <img src="https://cdn.nos.nl/image/2018/09/26/502493/2048x1152.jpg" alt="Eerste Kamer. Bron: ANP" style="width:100%;">
        <div class="carousel-caption">
        <a href="ek.php"><button class="button">Eerste Kamer</button></a><br>
        <h3>Bekijk de samenstelling van de Eerste Kamer</h3>
        <h6>Foto: ANP</h6>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Vorige</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Volgende</span>
    </a>
  </div>
</div>

<div class="container">
  <h3>Tweede Kamer</h3>
  <p>De Tweede Kamer is deel van de volksvertegen­woor­di­ging. Zij speelt een belangrijke rol bij de totstandkoming van wetten, controleert de regering en beslist over de vraag of een kabinet (of bewindspersoon) genoeg vertrouwen heeft.
      De Kamer heeft 150 leden, die rechtstreeks worden gekozen door Nederlanders die 18 jaar en ouder zijn. <br> <a href="tk.php"><button class="button">Tweede Kamer</button></a> <br><br> Bekijk hoe de kamer eruit zou zien volgens de laatste peilingen en welke partijen er meedoen aan de verkiezingen: <br> <a href="verkiezingen.php"><button class="button">Verkiezingen</button></a></p>
</div>

<div class="container">
  <h3>Eerste Kamer</h3>
  <p>De Eerste Kamer is deel van de volksvertegenwoordiging en heeft met name een rol op wetgevend gebied. Over een wetsvoorstel moet, als de Tweede Kamer het heeft aangenomen, ook door de Eerste Kamer worden gestemd. De Eerste Kamer kan een wetsvoorstel nog tegenhouden.
De leden van de Provinciale Staten kiezen de 75 Eerste Kamerleden. De Provinciale Staten worden weer wel rechtstreeks gekozen. Men spreekt dan ook wel van 'getrapte' verkiezingen. <br><a href="ek.php"><button class="button">Eerste Kamer</button></a></p>
</div>

</body>
</html>
