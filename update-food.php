<?php 
include "menu.php";
include "dao.php";
$id=$_GET['id']; 
$food=get_row_food($id);
?>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="all.css" rel="stylesheet"> 
    </head>
    <body>
    <div class="main-content">
            <div class="wrapper">
                <h1>Update Food</h1>
                <br>
                <br>
                <form action="control.php" method="post">
                    <input type="text" name="name" value="<?=$food['name'];?>" > 
                    <br>
                    <br>
                    <input type="text" name="quantity" value="<?=$food['quantity'];?>" > 
                    <br>
                    <br>
                    <input type="text" name="price" value="<?=$food['price'];?>" > 
                    <br>
                    <br>
                    <input type="hidden" name="id" value="<?=$food['id'];?>">
                    <input type="submit" name="update-food" value="Update Food">
                </form>
            </div>
        </div>
    </body>
</html>
<?php include "footer.php"; ?>