<?php
include 'conn.php';

$db2->where('parentid', '0');
$levels1 = $db2->get('categories');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css"/>
<body>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Cateogry
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <?php

      foreach ($levels1 as $level1) {
          $db2->where('parentid', $level1['id']);
          $levels2 = $db2->get('categories');
          $submenu_1 = '';
          $ulmenu_1 = '';
          $sub_text_1 = '';
          if ($levels2) {
              $submenu_1 = ' class="dropdown-submenu"';
              $ulmenu_1 = ' class="dropdown-menu"';
              $sub_text_1 = '<span class="caret"></span>';
          }

          ?>
        <li<?php
        echo $submenu_1 ?>><a href="#"><?php
                echo $level1['name'] . $sub_text_1 ?></a>

            <?php
            if ($levels2)
            { ?>
          <ul<?php
          echo $ulmenu_1 ?>>
              <?php
              } ?>
              <?php
              foreach ($levels2 as $level2) {
                  $db2->where('parentid', $level2['id']);
                  $levels3 = $db2->get('categories');
                  $submenu_2 = '';
                  $ulmenu_2 = '';
                  $sub_text_2 = '';
                  if ($levels3) {
                      $submenu_2 = ' class="dropdown-submenu"';
                      $ulmenu_2 = ' class="dropdown-menu"';
                      $sub_text_2 = '<span class="caret"></span>';
                  }

                  ?>

                <li<?php
                echo $submenu_2 ?>><a href="#"><?php
                        echo $level2['name'] . $sub_text_2; ?></a>


                    <?php
                    if ($levels3)
                    { ?>
                  <ul<?php
                  echo $ulmenu_2 ?>>
                      <?php
                      }
                      foreach ($levels3 as $level3) {
                          ?>
                        <li<?php
                        echo $submenu_2 ?>><a href="#"><?php
                                echo $level3['name'] ?></a></li>
                          <?php
                      } ?>


                      <?php
                      if ($levels3)
                      { ?>
                  </ul>
                <?php
                } ?>

                </li>


                  <?php
              } ?>


              <?php
              if ($levels2)
              { ?>
          </ul>
        <?php
        } ?>

        </li>
          <?php
      } ?>
  </ul>
</div>
</div>
</div>
</div>


<script>
  $(document).ready(function () {
    $('.dropdown-submenu a.test').on("click", function (e) {
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });
</script>


</body>
</html>