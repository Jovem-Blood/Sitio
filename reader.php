<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      img{
        max-width: 1200px;
      }
    </style>
    <?php


     ?>
</head>
<body>
  <header class="">
    <ul class="nav justify-content-center bg-dark align-items-center" style="height:50px">
      <li class="nav-item">
        <a class="nav-link active text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="drop.html">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Gêneros</a>
      </li>
    </ul>
  </header>

<div class="content">

  <section class="" style="margin: 2%;">

    <div style=';' class="float-right">
    <?php
    $manga = $_GET['manga'];
    $cap = $_GET['cap'];
    $ncap = $cap+1;
    echo "<a class='btn btn-dark' href='./reader.php?cap=$ncap&manga=$manga'>Próximo</a>";
      ?>
      </div>
    <div class="d-flex justify-content-center" style="flex-direction: column;">
      <?php
      include('functions.php');
      $sources = reader($manga,$cap);

      foreach ($sources as $src){
          echo"<img alt=$src'><br>";
      }


        //echo "<div style='max-width: 800px;'>".reader($manga, $cap).";</div>";
       ?>
    </div>
  </section>
  <div style='margin: 2%;' class="float-right">
  <?php
  $ncap = $cap+1;
  echo "<a class='btn btn-dark' href='./reader.php?cap=$ncap&manga=$manga'>Próximo</a>";
    ?>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
