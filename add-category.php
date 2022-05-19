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
                    <input type="text" name="name" placeholder="Enter Category Name">  
                    <br>
                    <br>
                    <input type="submit" name="cat" value="Add Category">
                </form>
            </div>
        </div>
    </body>
</html>
<?php include "footer.php"; ?>