<?php
include 'conn.php';

$db2->where('parentid', '0');
$levels1 = $db2->get('categories');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
  }

  .dropdown-submenu:hover > .dropdown-menu {
    display: block;
  }

  .dropdown-submenu > a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
  }

  .dropdown-submenu:hover > a:after {
    border-left-color: #fff;
  }

  .dropdown-submenu.pull-left {
    float: none;
  }

  .dropdown-submenu.pull-left > .dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
  }
</style>
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
                      } ?>



                      <?php
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