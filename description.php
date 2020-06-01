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
         ;
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
        <a class="nav-link text-light" href="#">Gêneros</a>
      </li>
    </ul>
  </header>

<div class="content">

<h1 class="text-center text-uppercase" style='font-weight: 700;margin-top:2%;'><?php echo str_replace('-',' ',$_GET['manga']); ?></h1>


<div class="" style="margin: 1%;">
  <div class="desc" style="">
    <?php echo get_things($manga);?>
  </div>
    <iframe class="float-right" width="350" height="500" src="https://discordapp.com/widget?id=711935936187072542&theme=dark"  allowtransparency="true" frameborder="0">
    </iframe><br>
    <h2 class="w-25 p-3"  style='font-weight: 700;margin-left: 40px;'>Capítulos#</h2>
</div>



<div class=" desc w-25 p-3" style="margin-left:1%;">

<?php
$cap_max = $_GET['manga'];
$manga = $_GET['manga'];
$cap_max = get_cap($manga);

for($c =1; $c<=$cap_max; $c++){
  echo "<a  href='reader.php?cap=$c&manga=$manga' style='color:#3170c4;font-weight: 700;'>Capítulo #$c</a> <br>";
}

 ?>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
