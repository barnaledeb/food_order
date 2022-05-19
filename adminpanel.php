<?php
include "menu.php"; 
include "dao.php";
$u=get_total_user();
$c=get_total_category();
$f=get_total_food();
$o=get_total_order();
?>
<!doctype html>
<html>
  <head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="all.css">
  </head>
  <body>
      <div class="main-content">
       <div class="wrapper">
          <!-- <strong>DASHBOARD</strong> -->
          <h1>DASHBOARD</h1>
          <div class="col-4 text-center">
            <h1><?=$u?></h1>
            <br>
            User
          </div>
          <div class="col-4 text-center">
            <h1><?=$c?></h1>
            <br>
            category
          </div>
          <div class="col-4 text-center">
            <h1><?=$f?></h1>
            <br>
            Food
          </div>
          <div class="col-4 text-center">
            <h1><?=$o?></h1>
            <br>
            Order
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
  </body>
</html>
     <!--main content section ends--> 
<?php include "footer.php"; ?>