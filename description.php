<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <?php
      include('functions.php');
      include('linkgen.php');
      $manga = $_GET['manga'];

    ?>

     <style media="screen">
       .desc{
         list-style-type: none;
         background-color: #e5e5e5;
         border-radius: 5px;
         padding: 5px;
         width: 400px;
         height: fit-content;
         margin-left: 40px;
       }
     </style>
</head>
<body>
  <header class="" >
    <ul class="nav justify-content-center bg-dark align-items-center" style="height:50px">
      <li class="nav-item">
        <a class="nav-link active text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="drop.html">Top</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="drop.html">Gêneros</a>
      </li>
    </ul>
  </header>

<div class="content">

<h1 class="text-center text-uppercase" style='font-weight: 700;'><?php echo str_replace('-',' ',$_GET['manga']); ?></h1>

<div class="">

  <div class="desc w-25 p-3 ">
    <?php echo get_things($manga);?>
  </div>

</div>

<h2 class="w-25 p-3"  style='font-weight: 700;margin-left: 40px;'>Capítulos#</h2>

<div class=" desc w-25 p-3 ">

<?php
$cap_max = $_GET['manga'];
$manga = $_GET['manga'];
$cap_max = get_cap($manga);

for($c =1; $c<=$cap_max; $c++){
  echo "<a href='reader.php?cap=$c&manga=$manga' style='color:#3170c4;font-weight: 700;'>Capítulo #$c</a> <br>";
}

 ?>

    </div>

</div>

</body>

</html>
