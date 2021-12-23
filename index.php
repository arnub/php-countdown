<!doctype html>
<html>
<head>
<title>Weihnachts Countdown</title>
<style>
.red{color:red;}
.orange{color:orange;}
.yellow{color:#e6e600;}
.green{color:green;}
.blue{color:blue;}
.purple{color:purple;}

h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}

</style>

</head>
<body>
<?php
 /* some debuging prints

 if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}if (ini_get('date.timezone')) {
    echo '<br>date.timezone: ' . ini_get('date.timezone');
}
  echo "<hr>";*/
  date_default_timezone_set('Europe/Berlin');
 /* some debuging prints
 if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}if (ini_get('date.timezone')) {
    echo '<br>date.timezone: ' . ini_get('date.timezone');
}
  echo "<hr>";
  echo "<br>";
  echo time();
  echo "<br>";
  print_r(getDate());
  echo "<br>";
  */
  $tag=24;
  $monat=12;
  $stunde=0;
  $minute=0;
  $sekunde=0;
  $jahr= date("Y");
  $datum= mktime($stunde,$minute,$sekunde,$monat,$tag,$jahr);
  $rest = $datum - time();
  //echo "datum: ".$datum;
  if($rest < 0) {
        $jahr++;
    $udatum = mktime($stunde,$minute,$sekunde,$monat,$tag,$jahr);
    $rest = $datum - time();
  }
  //  echo "<br>rest: ".$rest;
  $restTage = floor($rest / (60 * 60 * 24));
  $rest = floor($rest % (60 * 60 * 24));
  $restStunden = floor($rest / (60 * 60));
  $rest = floor($rest % (60 * 60));
  $restMinuten = floor($rest / 60);
  $restSekunden = floor($rest % 60);

  $stundenGesamt = ($restTage*24) + $restStunden;
  $minutenGesamt = ($stundenGesamt*60) + $restMinuten;
  $sekundenGesamt = $minutenGesamt*60;
  /*
  some debuging prints
  echo "<br> V9";
  echo "<br>restTage: ".$restTage;
  echo "<br>restStd: ".$restStunden."\t - restStd_Gesamt: ".$stundenGesamt;
  echo "<br>restmin: ".$restMinuten."\t - restMin_Gesamt: ".$minutenGesamt;
  echo "<br>restsek: ".$restSekunden."\t - restSek_Gesamt: ".$sekundenGesamt;*/
?>

  <h1>Bis Weihnachten sind es noch <span class="red"><?php echo $restTage?></span> Tag(e),  <span class="red"><?php echo $restStunden?></span> Stunde(n),  <span class="red"><?php echo $restMinuten?></span> Minute(n) und <span class="red"><?php echo $restSekunden?></span> Sekunden.
    <br>
  </h1>
    <hr>
    <br>In
    <br><?php echo $stundenGesamt ?> Stunden oder
   <br><?php echo $minutenGesamt ?> Minuten oder
    <br><?php echo $sekundenGesamt ?> Sekunden
    <br>ist Weichnachten.


</body>
</html>
