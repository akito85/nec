<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "head.php"; ?>
</head>
<body>
  <?php include "header.php"; ?>
  <?php include "nav.php"; ?>
  <div class="container">
    <?php

      $id = $_REQUEST['id'];
      switch($id) {
        default: include "home.php";
          break;
        case "home": include "home.php";
          break;
        case "events": include "events.php";
          break;
      }    
    /*
      $id = $_REQUEST['id'];
      switch($id) {
        default: include "system/layout/home.php";
          break;
        case "home": include "system/layout/home.php";
          break;
        case "about": include "system/layout/about.php";
          break;
        case "autoshow": include "system/layout/autoshow.php";
          break;
        case "products": include "system/layout/products.php";
          break;
        case "artdevie": include "system/layout/gallery.php";
          break;
        case "my-cart": include "system/layout/my-cart.php";
          break;
      }
    */
    ?>
  </div> <!-- end container -->

  <?php include "footer.php"; ?>
  <?php include "script.php"; ?>
</body>
</html>
