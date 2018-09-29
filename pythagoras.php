<?php

//Obdelnik
$a = 4;
$b = 5;
$obdelnikobsah = $a * $b;

//Trojuhelnik
$strana = 6;
$uhel = 60;
$uhel_radians = deg2rad ($uhel);
$vyska = sin ($uhel_radians) * $strana;
$trojuhelnikobsah = ceil($strana * $vyska / 2);

// Zobrazení výsledků na hezké stránce
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Starověká matematika</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Pythagoras <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Archimedes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Euklides</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Erathostenes</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Zde napíš co hledáš" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
      
        <h1>
<?php
  echo 'Obdélník';

?>
        </h1>

    <table class="table">

      <tbody>
        <tr>
          <th scope="row">Délka strany A:</th>
          <td><?php echo $a ?></td>
        </tr>
        <tr>
          <th scope="row">Délka strany B:</th>
          <td><?php echo $b ?></td>
        </tr>
        <tr>
          <th scope="row">Obvod obdelníku:</th>
          <td><?php echo ('O = 2*(a+b) = ' . 2 * ($a + $b) . ' cm') ?></td>
        </tr>
         <tr>
          <th scope="row">Obsah obdelníku:</th>
          <td><?php echo ('V = a*b = ' . $obdelnikobsah . ' cm2') ?></td>
        </tr>
      </tbody>
    </table>

        <h1>
<?php
  echo 'Trojuhelník';

?>
        </h1>

    <table class="table">

      <tbody>
        <tr>
          <th scope="row">Délka strany:</th>
          <td><?php echo ($strana . ' cm') ?></td>
        </tr>
        <tr>
          <th scope="row">Úhel:</th>
          <td><?php echo ($uhel . ' stupňů') ?></td>
        </tr>
        <tr>
          <th scope="row">Obvod trojuhelníku:</th>
          <td><?php echo ('O = a+b+c = ' . ($strana + $strana + $strana) . ' cm') ?></td>
        </tr>
         <tr>
          <th scope="row">Výška trojuhelníku:</th>
          <td><?php echo ('v = a * sin (alfa) = ' . ceil ($vyska) . ' cm') ?></td>
        </tr>
        <tr>
          <th scope="row">Obsah trojuhelníku:</th>
          <td><?php echo ('V = a * v / 2 = ' . ceil ($trojuhelnikobsah) . ' cm2') ?></td>
        </tr>
      </tbody>
    </table>

    <div class="container">
        <h1 class="display-4">Vzpomínka ma Pythagora</h1>
          <img src="https://i2.wp.com/www.brainpickings.org/wp-content/uploads/2018/05/pythagoras_knapp.jpg?resize=676%2C1024&ssl=1">
        
        <p class="lead">Pythagoras ze Samu (také Pýthagorás, řec. Πυθαγόρας ο Σάμιος, okolo 570 př. n. l. ostrov Samos – po 510 př. n. l. Krotón v jižní Itálii) byl legendární řecký filosof, matematik, astronom i kněz. Byl také veřejně činný, ale údaje o něm se často rozcházejí. Z jeho díla (pokud nějaké napsal) se nic nezachovalo, založil však velmi významnou školu a výklady i legendy jeho následovníků překryly jeho původní myšlenky, takže se velmi obtížně rekonstruují. Pythagorejská tradice měla velký vliv na Platóna, byla živá v novoplatónismu, v renesanci a v různých – často fantastických - podobách žije i dnes.
        Pythagorova věta popisuje vztah, který platí mezi délkami stran pravoúhlých trojúhelníků v euklidovské rovině. Umožňuje dopočítat délku třetí strany takového trojúhelníka, pokud jsou známy délky dvou zbývajících stran.

        Věta zní: Obsah čtverce sestrojeného nad přeponou (nejdelší stranou) pravoúhlého rovinného trojúhelníku je roven součtu obsahů čtverců nad jeho odvěsnami (dvěma kratšími stranami).
        </p>
        
    </div>



    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
