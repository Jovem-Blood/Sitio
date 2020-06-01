<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio</title>
    <link rel="stylesheet" href="style.css" type="text/css">
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


      $cap = $_GET["cap"];
      $manga = $_GET["manga"];
      $op;

      switch ($manga) {
        case 'perfect-half':
        $op=1;
            break;
      //case 'kimetsu-no-yaiba':
      //  $op=1;
          //  break;
      case 'darwins-game':
        $op=2;
            break;
      default:
        $op=0;
            break;
        }

        $num = 1;
        $try =0;
        $png = '.jpg';
        do{
        $manga=='kimetsu-no-yaiba'?$png='.png':$png='.jpg';
        $n = 0;
        $num>9?$n="":$n=0;
        $link=["https://img-yes.filestatic1.xyz/mangas_files/$manga/$cap/$n$num.png",
        //  "https://unionleitor.top/leitor/mangas/Kimetsu%20no%20Yaiba/$cap/$n$num.jpg",
        "https://comicspace.com.br/uploads/manga/ptbrperfect-half/chapters/$cap/$n$num.jpg",
        "https://img-host.filestatic1.xyz/images/darwins-game/$cap/img0000$n$num.jpg.webp"];

        $path=$link[$op];
        $path_headers = @get_headers($path);
        if(!$path_headers || $path_headers[0] == 'HTTP/1.1 403 Forbidden'){
          
          $error=false;
            /*
          $try++; //$try =+1
          $try>3?$error=true:$error=false;// se chegar a 3 o erro é declarado senão o código segue

          if($png=='.png'){
            $path="https://img-yes.filestatic1.xyz/mangas_files/$manga/$cap/$n$num.jpg";
          }
              */
        }else{
          $error = false;
          echo "<img class='page' style='max-width: 800px;' alt='página' src='$path'>";
          $num++;
          }
        }while($error == false);


/*
      $file = 'http://www.domain.com/somefile.jpg';
      $file_headers = @get_headers($file);
      if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
      $exists = false;
      }else{
      $exists = true;
      }
*/

/*
      for($num =0; $num <$num_max; $num++) {

      echo "<img class='page' style='max-width: 800px;' alt='página $num' src='$path'>";
      //print ("<img class='page' style='max-width: 800px;' src='https://unionleitor.top/leitor/mangas/Darwins%20Game/01/img0000$n$num.jpg'>\n");
    }*/
       ?>
    </div>
  </section>
  <?php

  $ncap = $cap+1;
  echo "<a style='background:white;' href='./reader.php?cap=$ncap&manga=$manga'>Próximo</a>"; ?>
</div>

</body>
</html>
