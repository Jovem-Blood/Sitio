<?php
require('view/templates/header.php');
require('functions.php');
require('linkgen.php');
if (!$_GET) {
  $manga = "beastars";
} else {
  $manga = $_GET["manga"];
}


?>

<style media="screen">
  .desc {
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

<div class="content">

  <h1 class="text-center text-uppercase" style='font-weight: 700;margin-top:5%;'><?php echo str_replace('-', ' ', $manga); ?></h1>


  <div class="" style="margin: 1%;">
    <div class="desc">
      <?php echo get_things($manga); ?>
    </div>
    <h2 class="w-25 p-3" style='font-weight: 700;margin-left: 40px;'>Capítulos#</h2>
  </div>

  <div class=" desc w-25 p-3" style="margin-left:1%; overflow: scroll;max-height: 50vh;">

    <?php
    $cap_max = get_cap($manga);

    for ($c = 1; $c <= $cap_max; $c++) {
      echo "<a  href='reader.php?cap=$c&manga=$manga' style='color:#3170c4;font-weight: 700;'>Capítulo #$c</a> <br>";
    }

    ?>

  </div>

</div>

<?php require('view/templates/footer.php'); ?>