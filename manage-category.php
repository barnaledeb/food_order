<?php 
include "menu.php";
include "dao.php";
$category=get_category()
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
                    <h1>Manage Category</h1>
                    <br><br>
                    <!--button to add admin -->
                    <a href="add-category.php" class="btn-primary">Add Category</a>
                    <br><br>
                    <table class="tbl-full">
                         <!-- <table align="center" border="1.5px solid black" cellspacing="0" width="100%" height="1%" class="tbl-full"> -->
                         <thead>
                              <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach($category as $c){?>
                                   <tr>
                                        <td><?=$c['id'];?></td>
                                        <td><?=$c['name'];?></td>
                                        <td>
                                             <a href="update-category.php?id=<?=$c['id'];?>" class="btn-secondary">Update</a>
                                             <a href="control.php?id=<?=$c['id'];?>&n=<?='dlt-cat'?>" class="btn-denger">Delete</a>
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
<?php include "footer.php";?>
