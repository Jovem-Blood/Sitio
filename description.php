<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <?php include('functions.php');
    $manga = $_GET['manga'];
     ?>
     <style media="screen">
       .desc{
         list-style-type: none;
         background-color: white;
         border-radius: 5px;
         padding: 5px;
         width: 400px;
         height: fit-content;
         margin: 40px;
       }
     </style>
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


<h1><?php echo $_GET['manga']; ?></h1>
<div class="master">


<div class="desc">
  <?php echo get_things($manga);?>
</div>
</div>
<span class="topics">Capítulos#</span>

<div class="caps">


<?php
$cap_max = $_GET['manga'];
$manga = $_GET['manga'];
/*switch ($cap_max) {
  case 'beastars':
    $cap_max=146;
    break;
  case 'kimetsu-no-yaiba':
    $cap_max=204;
    break;
  case 'perfect-half':
    $cap_max=102;
    break;
  case 'darwins-game':
    $cap_max=84;
    break;
  default:
    $cap_max=0;
    break;
}*/

//echo (get_cap($manga))


$cap_max = get_cap($manga);

for($c =1; $c<=$cap_max; $c++){
  echo "<a href='reader.php?cap=$c&manga=$manga' class='lcap'>Capítulo #$c</a> <br>";
}

 ?>
</div>

</div>
</body>

</html>
