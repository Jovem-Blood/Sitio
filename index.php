<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php


    ?>
</head>
<body>
    <header class="head">
      <nav >
        <ul class="list-unstyled">
          <li><a class="ahead" href="index.php">Home</a></li>
          <li><a class="ahead" href="drop.html">Top</a></li>
          <li><a class="ahead" href="drop.html">Gêneros</a></li>
        </ul>
      </nav>
    </header>
        <h1>Bem vindo a Yong_mangás XD</h1>

        <section class="container-fluid">
          <?php
          $src = ["https://unionleitor.top/assets/uploads/mangas/8ed44721.jpg","https://img-host.filestatic1.xyz/mangas_files/beastars/image_beastars_large.jpg","https://img-host.filestatic1.xyz/mangas_files/kimetsu-no-yaiba/image_kimetsu-no-yaiba_large.jpg","https://img-host.filestatic1.xyz/mangas_files/perfect-half/image_perfect-half_large.jpg","https://img-yes.filestatic1.xyz/mangas_files/fullmetal-alchemist/image_fullmetal-alchemist_xlarge.jpg"];
          $link = ["darwins-game","beastars","kimetsu-no-yaiba","perfect-half","fullmetal-alchemist"];
          $name = ["Darwin's Game","Beastars","Kimetsu No Yaiba","Perfect Half", "Fullmetal Alchemist"];
          for($m = 0; $m<=4; $m++){
          echo "
          <div class='smanga' style='min-height: 220px;'>
                      <a href='./description.php?manga=$link[$m]'>
                          <img src='$src[$m]' class='thumb' style='width: 100px; height: 150px;'></a>
                      <br>
                      <span style='font-size: 16px'>
                          <a href='./description.php?manga=$link[$m]' class='titulo'>
                              $name[$m]</a>
                      </span>
          </div>
          ";
        }
           ?>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
