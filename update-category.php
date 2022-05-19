<?php 
include "menu.php";
include "dao.php";
$id=$_GET['id']; 
$cat=get_row_cat($id);
?>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="all.css" rel="stylesheet"> 
    </head>
    <body>
    <div class="main-content">
            <div class="wrapper">
                <h1>Update Category</h1>
                <br>
                <br>
                <form action="control.php" method="post">
                    <input type="text" name="name" value="<?=$cat['name'];?>" > 
                    <br>
                    <br>
                    <input type="hidden" name="id" value="<?=$cat['id'];?>">
                    <input type="submit" name="update-cat" value="Update Category">
                </form>
            </div>
        </div>
    </body>
</html>
<?php include "footer.php"; ?>