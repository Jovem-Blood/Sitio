<?=require('view/templates/header.php');?>

        <h1 class="text-center">Bem vindo a Yong_mangás XD</h1>
      <div class="p-3 h-50" style="width:77%">
        <section class="container-fluid d-flex flex-wrap p-2 bg-light" style="border-radius: 5px;">
          <?php
          $src=gen()[0];
          $link=gen()[1];
          $name=gen()[2];
          $cont = count($src);
          for($m = 0; $m<$cont; $m++){
          echo "
          <div class='' style='min-height: 220px; text-align:center;margin:6px;width: 150px;'>
            <a href='./description.php?manga=$link[$m]'>
              <img src='$src[$m]' style='border-radius: 5px;width:150px;height:200px;padding: 6px;background: white;border: 1px solid #ddd;'></a>
                <br>
                  <span class='text-decoration-none' style='font-size: 16px '>
                    <a href='./description.php?manga=$link[$m]' class='text-decoration-none'>
                      $name[$m]</a>
                      </span>
          </div>
          ";
        }
           ?>
        </section>
    </div>
<?=require('view/templates/footer.php');