<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
      img{
        width: 800px;
      }
    </style>
    <?php


     ?>
</head>
<body>
<header class="head">



<nav style="text-decoration: none;">
  <ul>

    <li><a class="ahead" href="index.php">Home</a></li>
    <li><a class="ahead" href="drop.html">Top</a></li>
    <li><a class="ahead" href="drop.html">Gêneros</a></li>

  </ul>
</nav>

</header>

<div class="content">

  <section class="sreader">

    <div class="reader">
      <?php

      $manga = $_GET['manga'];
      $cap = $_GET['cap'];

      include('functions.php');



      echo "<div style='max-width: 800px;'>".reader($manga, $cap).";</div>";


       ?>
    </div>
  </section>
  <?php

  $ncap = $cap+1;
  echo "<a style='background:white;' href='./reader.php?cap=$ncap&manga=$manga'>Próximo</a>"; ?>
</div>

</body>
</html>
