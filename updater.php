<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitio</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>


<body class="bb">
  <header class="" >
    <ul class="nav justify-content-center bg-dark align-items-center w-100" style="height:50px; position:fixed; top:0;">
      <li class="nav-item">
        <a class="nav-link active text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="Sobre.html">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Gêneros</a>
      </li>
      <li class="nav-link " style="position:absolute; left:90%;">
        <input class="text-light" type="button" name="change" value="Dark Mode" style="background:none; border:0;" onclick="change()">
      </li>
    </ul>
  </header>
  <div class=" d-flex justify-content-center align-items-center"style="margin-top:10%; margin-left: auto;margin-right: auto;width:500px; height:400px; background:#9ab5d1; border-radius:5px;">


  <form class="form" action="model/upload.php" method="post" >
  <div class="form-group">
    <label >url da Tumb</label>
    <input type="text" name="src" class="form-control" >
  </div>
  <div class="form-group">
    <label>Sem Formatação</label>
    <input type="text" name="link" class="form-control">
  </div>
  <div class="form-group">
    <label >Com Formatação</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
  <?php require('view/templates/footer.php')?>
