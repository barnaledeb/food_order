<?php include "menu.php"; ?>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="all.css" rel="stylesheet"> 
    </head>
    <body>
    <div class="main-content">
            <div class="wrapper">
                <h1>Add Admin</h1>
                <br>
                <br>
                <form action="control.php" method="post">
                    <input type="text" name="name" placeholder="Enter Food Name">  
                    <br>
                    <br>
                    <input type="text" name="quantity" placeholder="Enter Food Quantity">  
                    <br>
                    <br>
                    <input type="text" name="price" placeholder="Enter Food Price">  
                    <br>
                    <br>
                    <input type="submit" name="food" value="Add Food">
                </form>
            </div>
        </div>
    </body>
</html>
<?php include "footer.php"; ?>