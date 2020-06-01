<!DOCTYPE html> <!--é bem auto explicativo...-->
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php
    include('linkgen.php');
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
          <a class="nav-link text-light" href="drop.html">Gêneros</a>
        </li>
      </ul>
    </header>
        <h1 class="text-center">Bem vindo a Yong_mangás XD</h1>
      <div class="w-75 p-3 h-50">
        <section class="container-fluid d-flex flex-wrap p-2 bg-light" style="border-radius: 5px;">
          <?php
          $src=gen()[0];
          $link=gen()[1];
          $name=gen()[2];
          for($m = 0; $m<=4; $m++){
          echo "
          <div class='' style='min-height: 220px; text-align:center;margin:6px;'>
            <a href='./description.php?manga=$link[$m]'>
              <img src='$src[$m]'class='' style='border-radius: 5px;width:150px;height:200px;padding: 6px;background: white;border: 1px solid #ddd;'></a>
                <br>
                  <span class='text-decoration-none' style='font-size: 16px'>
                    <a href='./description.php?manga=$link[$m]' class='text-decoration-none'>
                      $name[$m]</a>
                      </span>
          </div>
          ";
        }
           ?>
        </section>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
