<?php 
include "menu.php";
include "dao.php";
$food=get_food()
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
                    <h1>Manage Food</h1>
                    <br><br>
                    <!--button to add admin -->
                    <a href="add-food.php" class="btn-primary">Add Food</a>
                    <br><br>
                    <table class="tbl-full">
                    <!-- <table align="center" border="1.5px solid black" cellspacing="0" width="100%" height="1%" class="tbl-full"> -->
                         <thead>     
                              <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Quantity</th>
                                   <th>Price</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach($food as $f){?>
                                   <tr>
                                        <td><?=$f['id'];?></td>
                                        <td><?=$f['name'];?></td>
                                        <td><?=$f['quantity'];?></td>
                                        <td><?=$f['price'];?></td>
                                        <td>
                                             <a href="update-food.php?id=<?=$f['id'];?>" class="btn-secondary">Update</a>
                                             <a href="control.php?id=<?=$f['id'];?>&n=<?='dlt-food';?>" class="btn-denger">Delete</a>
                                             <br>
                                        </td>  
                                   </tr>
                              <?php } ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </body>
</html>
<?php include "footer.php"; ?>
