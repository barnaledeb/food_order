<?php
include "dao.php";
/*==============================================================*/
/*============================FOR ADD========================*/
/*==============================================================*/
if(isset($_POST['user']))
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $c=$_POST['contact'];
    $a=$_POST['address'];
    $user=array("n"=>$n,"e"=>$e,"c"=>$c,"a"=>$a);
    if(add_user($user))
    {
        header("location:manage-user.php");
    }
    else
    {
        header("location:add-user.php");
    }
} 
if(isset($_POST['cat']))
{
    $n=$_POST['name'];
    if(add_category($n))
    {
        header("location:manage-category.php");
    }
    else
    {
        header("location:add-category.php");
    }
} 
if(isset($_POST['food']))
{
    $n=$_POST['name'];
    $q=$_POST['quantity'];
    $p=$_POST['price'];
    $food=array("n"=>$n,"q"=>$q,"p"=>$p);
    if(add_food($food))
    {
        header("location:manage-food.php");
    }
    else
    {
        header("location:add-food.php");
    }
} 
/*==============================================================*/
/*============================FOR DELETE========================*/
/*==============================================================*/
if(isset($_GET['n'])=="dlt-user")
{
    $id=$_GET['id'];
    if(delete_user($id))
    {
        header("Location:manage-user.php");
    }
    else
    {
        echo "<script>alert('data cannot be delete');</script>";
    }
}
if(isset($_GET['n'])=="dlt-cat")
{
    $id=$_GET['id'];
    if(delete_category($id))
    {
        header("Location:manage-category.php");
    }
    else
    {
        echo "<script>alert('data cannot be delete');</script>";
    }
}
if(isset($_GET['n'])=="dlt-food")
{
    $id=$_GET['id'];
    if(delete_food($id))
    {
        header("Location:manage-food.php");
    }
    else
    {
        echo "<script>alert('data cannot be delete');</script>";
    }
}
/*==============================================================*/
/*============================FOR UPDATE========================*/
/*==============================================================*/
if(isset($_POST['update-cat']))
{
    $id=$_POST['id'];
    $n=$_POST['name'];
    $m=array("id"=>$id,"n"=>$n);
    if(update_cat($m))
    {
        header("Location:manage-category.php");
    }
    else
    {
        header("Location:update-category.php");
    }
}
if(isset($_POST['update-food']))
{
    $id=$_POST['id'];
    $n=$_POST['name'];
    $q=$_POST['quantity'];
    $p=$_POST['price'];
    $m=array("id"=>$id,"n"=>$n,"q"=>$q,"p"=>$p);
    if(update_food($m))
    {
        header("Location:manage-food.php");
    }
    else
    {
        header("Location:update-food.php");
    }
}
?>