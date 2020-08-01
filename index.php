<?php
require('view/templates/header.php');
require('linkgen.php');
;?>

        <h1 class="text-center">Bem vindo a Yong_mangás XD</h1>
      <div class="p-3 h-50" style="max-width:77%">
        <section class="container-fluid d-flex flex-wrap p-2 bg-light" style="border-radius: 5px;">
          <?php
          $images = json_decode(gen(),true);
          foreach ($images as $image){
              $src = $image['scr'];
              $name = $image['name'];
              $link = $image['link'];

              echo "<div class='' style='min-height: 220px; text-align:center;margin:6px;width: 150px;'>
            <a href='./description.php?manga=$link'>
              <img alt='$name' src='$src' style='border-radius: 5px;width:150px;height:200px;padding: 6px;background: white;border: 1px solid #ddd;'></a>
                <br>
                  <span class='text-decoration-none' style='font-size: 16px '>
                    <a href='./description.php?manga=$link' class='text-decoration-none'>
              $name</a>
                      </span>
          </div>";
          }
          ?>
        </section>
    </div>

<?php require('view/templates/footer.php'); ?>