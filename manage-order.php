<?php 
include "menu.php";
include "dao.php";
$order=get_order()
?>
<!doctype html>
<html>   
     <head>
          <title>Admin Page</title>
          <link href="all.css" rel="stylesheet">
     </head> 
     <body>
          <div class="main-content">
               <div class="wrapper">
                    <h1>Manage Order</h1>
                    <!--button to add admin -->
                    <!-- <a href="#" class="btn-primary">Add Order</a> -->
                    <br><br>
                    <table class="tbl-full">
                    <!-- <table align="center" border="1.5px solid black" cellspacing="0" width="100%" height="1%" class="tbl-full"> -->
                         <thead>
                              <tr>   
                                   <th>ID</th>
                                   <th>User Name</th>
                                   <th>Orders</th>
                                   <th>Total Price</th>
                                   <th>Address</th>
                                   <th>Payment Type</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach($order as $o){?>
                                   <tr>
                                        <td><?=$o['id'];?></td>
                                        <td><?=$o['user_name'];?></td>
                                        <td><?=$o['orders'];?></td>
                                        <td><?=$o['total_price'];?></td>
                                        <td><?=$o['address'];?></td>
                                        <td><?=$o['payment_type'];?></td>
                                   </tr>
                              <?php } ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </body>
</html>
<?php include "footer.php"; ?>
