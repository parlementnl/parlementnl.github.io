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
      <li><a href="index.php">Home</a></li>
      <li><a href="tk.php"><b>Tweede Kamer</b></a></li>
      <li><a href="ek.php">Eerste Kamer</a></li>
      <li><a href="verkiezingen.php">Verkiezingen</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
    </ul>
  </div>
  </div>
</nav>
  
<div class="container">

<div class="naamenlogo">
  <h2>Tweede Kamer</h2>
  <p>Tweede Kamer der Staten-Generaal</p>
</div>
  <br><div class="parlement">
  <div class="flourish-embed flourish-parliament" data-src="visualisation/5561708" data-width="500px"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
</div>

<div class="container">
    <div class="text-over">
  <h2>Fracties in de Tweede Kamer</h2>
    </div><br><br><br>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Partij</th>
        <th>Fractievoorzitter</th>
        <th>Zetels</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Volkspartij voor Vrijheid en Democratie (VVD) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/VVD_logo_%282020–present%29.svg/304px-VVD_logo_%282020–present%29.svg.png" alt="VVD" style="height: 2rem;"></td>
        <td>Klaas Dijkhoff</td>
        <td>33</td>
      </tr>
      <tr>
        <td>Partij voor de Vrijheid (PVV) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/PVV_logo_%282006–present%29.svg/532px-PVV_logo_%282006–present%29.svg.png" alt="PVV" style="height: 2rem;"></td>
        <td>Geert Wilders</td>
        <td>20</td>
      </tr>
      <tr>
      <td>Christen-Democratisch Appèl (CDA) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/CDA_logo_2021.svg/300px-CDA_logo_2021.svg.png" alt="CDA" style="height: 2rem;"></td>
        <td>Pieter Heerma</td>
        <td>19</td>
      </tr>
      <tr>
      <td>Democraten 66 (D66) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/D66_logo_%282019–present%29.png/400px-D66_logo_%282019–present%29.png" alt="D66" style="height: 2rem;"></td>
        <td>Rob Jetten</td>
        <td>19</td>
      </tr>
      <tr>
      <td>GroenLinks <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/GroenLinks_logo_%28variant%29.png/400px-GroenLinks_logo_%28variant%29.png" alt="GL" style="height: 2rem;"></td>
        <td>Jesse Klaver</td>
        <td>14</td>
      </tr>
      <tr>
      <td>Socialistische Partij (SP) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Socialistische_Partij_%28nl_2006%29_Logo.svg/400px-Socialistische_Partij_%28nl_2006%29_Logo.svg.png" alt="SP" style="height: 2rem;"></td>
        <td>Lilian Marijnissen</td>
        <td>14</td>
      </tr>
      <tr>
      <td>Partij van de Arbeid (PvdA) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/PvdA_logo_%282018–present%29.svg/400px-PvdA_logo_%282018–present%29.svg.png" alt="PVDA" style="height: 2rem;"></td>
        <td>Lilianne Ploumen</td>
        <td>9</td>
      </tr>
      <tr>
      <td>ChristenUnie <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/ChristenUnie_logo.svg/400px-ChristenUnie_logo.svg.png" alt="CU" style="height: 2rem;"></td>
        <td>Gert-Jan Segers</td>
        <td>5</td>
      </tr>
      <tr>
      <td>Partij voor de Dieren (PvdD) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Party_for_the_Animals_logo.svg/400px-Party_for_the_Animals_logo.svg.png" alt="PVDD" style="height: 2rem;"></td>
        <td>Esther Ouwehand</td>
        <td>5</td>
      </tr>
      <tr>
      <td>50PLUS <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/50PLUS_%28nl%29_Logo.svg/343px-50PLUS_%28nl%29_Logo.svg.png" alt="50+" style="height: 2rem;"></td>
        <td>Corrie van Brenk</td>
        <td>4</td>
      </tr>
      <tr>
      <td>Staatkundig Gereformeerde Partij (SGP) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/SGP_logo_%282016–present%29.svg/400px-SGP_logo_%282016–present%29.svg.png" alt="SGP" style="height: 2rem;"></td>
        <td>Kees van der Staaij</td>
        <td>3</td>
      </tr>
      <tr>
      <td>DENK <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/DENK_logo_%282020–present%29.svg/400px-DENK_logo_%282020–present%29.svg.png" alt="DENK" style="height: 2rem;"></td>
        <td>Farid Azarkan</td>
        <td>3</td>
      </tr>
      <tr>
      <td>Forum voor Democratie (FVD) <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/FvD_Logo.png" alt="FVD" style="height: 2rem;"></td>
        <td>Thierry Baudet</td>
        <td>2</td>
      </tr>
      <tr>
      <td>Groep Van Kooten-Arissen (vKA) <img src="https://static1.squarespace.com/static/5fbfb98e2e34347c703d20ad/t/5fbff36bf3de5e49b56d6497/1615574325566/" alt="Splinter" style="height: 2rem;"></td>
        <td>Femke Merel van Kooten-Arissen</td>
        <td>1</td>
      </tr>
      <tr>
      <td>Groep Krol (Krol) <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Lijst_Henk_Krol_logo.svg/400px-Lijst_Henk_Krol_logo.svg.png" alt="LHK" style="height: 2rem;"></td>
        <td>Henk Krol</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

<script>
// Set the date we're counting down to
var countDownDate = new Date("mar 17, 2021 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " Dagen " + hours + " Uur "
  + minutes + " Minuten " + seconds + " Seconden ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>