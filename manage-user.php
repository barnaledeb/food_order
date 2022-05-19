<?php 
include "menu.php";
include "dao.php";
$user=get_user();
?>
<html>   
     <head>
          <title>Admin Page</title>
          <link href="all.css" rel="stylesheet">
     </head> 
     <!--main content section starts--> 
<body>
     <div class="main-content">
          <div class="wrapper">
               <h1>Manage User</h1>
               <br><br>
               <table class="tbl-full">
               <!-- <table align="center" border="1.5px solid black" cellspacing="0" width="100%" height="1%" class="tbl-full"> -->
                    <thead>     
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Address</th>
                              <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach($user as $u){?>
                         <tr>
                              <td><?=$u['id'];?></td>
                              <td><?=$u['name'];?></td>
                              <td><?=$u['email'];?></td>
                              <td><?=$u['contact'];?></td>
                              <td><?=$u['address'];?></td>
                              <td>
                                   <a href="control.php?id=<?=$u['id'];?>&n=<?='dlt-user';?>" class="btn-denger">Delete</a>
                                   <br>
                              </td>
                         </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
     </div>
     <!--main content section ends--> 
</body>
</html>
     
     <?php include "footer.php"; ?>